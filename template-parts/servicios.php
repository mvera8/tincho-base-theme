<?php
/**
 * Template Part: Servicios (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section id="section-servicios" class="py-5">
	<div class="container">
		<?php
		get_template_part(
			'template-parts/section',
			'title',
			array(
				'title' => 'Nuestros Servicios',
				'lead'  => 'Limpieza profesional para cada espacio'
			)
		);
		?>

		<div class="row">
			<?php
			$args = [
				'post_type'              => 'servicios',
				'post_status'            => 'publish',
				'posts_per_page'         => 4,
				'order'                  => 'ASC',
				'no_found_rows'          => true,
				'ignore_sticky_posts'    => true,
				'update_post_term_cache' => false,
				'cache_results'          => true,
				'lazy_load_term_meta'    => true,
			];

			$servicios_q = new WP_Query($args);

			if ( $servicios_q->have_posts() ) :
				while ( $servicios_q->have_posts() ) :
					$servicios_q->the_post();

					get_template_part(
						'template-parts/card',
						'servicio',
						[
							'thumbnail_size'  => 'medium',
							'show_excerpt'    => true,
							'show_date'       => true,
							'card_classes'    => 'h-100',
						]
					);

				endwhile;
				wp_reset_postdata();
			else :
				echo '<p>No hay publicaciones recientes.</p>';
			endif;
			?>
		</div>
	</div>
</section>
