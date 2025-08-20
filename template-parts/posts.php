<?php
/**
 * Template Part: Posts (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="py-5">
	<div class="container">
		<?php
		get_template_part(
			'template-parts/section',
			'title',
			array(
				'title' => 'Novedades',
			)
		);
		?>

		<div class="row mb-5">
			<?php
			$args = [
				'post_type'      => 'post',
				'posts_per_page' => 3,
				'post_status'    => 'publish',
				'orderby'        => 'date',
				'order'          => 'DESC',
			];

			$latest_posts = new WP_Query($args);

			if ( $latest_posts->have_posts() ) :
				while ( $latest_posts->have_posts() ) :
					$latest_posts->the_post();

					get_template_part(
						'template-parts/card',
						'post',
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

		<div class="text-center pt-2">
			<?php
			get_template_part(
				'template-parts/btn',
				'multiuso',
				[
					'text'  => 'Ver Blog',
					'link'  => '/blog/',
					'class' => 'btn-outline-primary'
				]
			);
			?>
		</div>
	</div>
</section>