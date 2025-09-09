<?php
/**
 * Template Part: Posts (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$args = [
	'post_type'      => 'post',
	'posts_per_page' =>  wp_is_mobile() ? 2 : 3,
	'post_status'    => 'publish',
];

$latest_posts = new WP_Query($args);
?>

<section class="py-0 py-md-5">
	<div class="container">
		<?php
		get_template_part(
			'template-parts/title',
			'section',
			array(
				'title'    => 'Novedades',
				'align'    => 'center text-md-start col-12 col-md-6',
				'btn_link' => '/blog/',
				'btn_text' => 'Ver Blog',
			)
		);
		?>

		<div class="row">
			<?php
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