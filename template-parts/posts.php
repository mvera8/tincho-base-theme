<?php
/**
 * Template Part: Posts (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="pt-5 pb-0">
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

    <div class="row">

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
	</div>

		</div>
  </div>
</section>