<?php
/**
 * Shortcode: [cleanmax_servicio slug="mi-servicio"]
 * Muestra título, enlace y excerpt de un CPT "servicio/servicios" según slug.
 */
add_shortcode('cleanmax_servicio', function($atts) {
    // Solo permitimos 'slug'
    $atts = shortcode_atts([
        'slug' => '',
    ], $atts, 'cleanmax_servicio');

    if (empty($atts['slug'])) {
        return '<div class="alert alert-warning">Falta el atributo <code>slug</code> en <code>[cleanmax_servicio]</code>.</div>';
    }

    // Intentamos en 'servicio' y 'servicios' (ajusta si tu CPT es otro)
    $post_obj = null;
    foreach (['servicio', 'servicios'] as $pt) {
        $q = new WP_Query([
            'name'           => sanitize_title($atts['slug']),
            'post_type'      => $pt,
            'post_status'    => 'publish',
            'posts_per_page' => 1,
            'no_found_rows'  => true,
            'fields'         => 'all',
        ]);
        if ($q->have_posts()) {
            $q->the_post();
            $post_obj = get_post();
            break;
        }
        wp_reset_postdata();
    }

    if (!$post_obj) {
        return '<div class="alert alert-danger">No se encontró el servicio con el slug <strong>' . esc_html($atts['slug']) . '</strong>.</div>';
    }

    $title   = get_the_title($post_obj);
    $perma   = get_permalink($post_obj);
		$image   = get_the_post_thumbnail_url($post_obj, 'large');
		if ( ! $image ) {
				$image = get_cleanmax_image( 'slider_hogares' );
		}
    $excerpt = has_excerpt($post_obj)
        ? get_the_excerpt($post_obj)
        : wp_trim_words(wp_strip_all_tags($post_obj->post_content), 26);

    ob_start();
		?>
		<div class="card bg-primary border-0 rounded my-5 overflow-hidden">
			<div class="row align-items-center justify-content-center g-0">
				<div class="col-md-4">
					<img src="<?php echo esc_url( $image ); ?>" class="img-fluid rounded-start" alt="<?php echo esc_html($title); ?>" loading="lazy" />
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h4 class="card-title mb-2">
							<a href="<?php echo esc_url($perma); ?>" class="text-decoration-none text-white">
								<?php echo get_bloginfo('description') . ' en ' . esc_html($title); ?>
							</a>
						</h4>
						<?php
						if (!empty($excerpt)) : ?>
							<p class="card-text text-truncate text-white"><?php echo esc_html($excerpt); ?></p>
						<?php
						endif;

						get_template_part(
							'template-parts/btn',
							'multiuso',
							[
								'text' => 'Ver Servicio',
								'link' => $perma,
								'class' => 'btn-secondary',
							]
						);
						?>
					</div>
				</div>
			</div>
		</div>
    <?php
    wp_reset_postdata();
    return ob_get_clean();
});
