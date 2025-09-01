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
				'title'    => 'Novedades',
				'align'    => 'start col-6',
				'btn_link' => '/blog/',
				'btn_text' => 'Ver Blog',
			)
		);
		?>

		<div class="row mb-5">
			<?php
			$args = [
				'post_type'      => 'post',
				'posts_per_page' =>  wp_is_mobile() ? 2 : 3,
				'post_status'    => 'publish',
			];

			$latest_posts = new WP_Query($args);

			if ( $latest_posts->have_posts() ) :
				while ( $latest_posts->have_posts() ) :
					$latest_posts->the_post();

					get_template_part( 'template-parts/card-post' );

				endwhile;
				wp_reset_postdata();
			else :
				echo '<p>No hay publicaciones recientes.</p>';
			endif;
			?>
		</div>
	</div>
</section>