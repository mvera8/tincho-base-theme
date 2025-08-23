<?php
get_header();
get_template_part( 'template-parts/navbar' );
get_template_part(
  'template-parts/page',
  'title',
  ['page_title'  => 'Blog' ]
);
?>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <?php if ( have_posts() ) : ?>
          <div class="row g-4">
            <?php
            while ( have_posts() ) :
              the_post();

              get_template_part(
                'template-parts/card',
                'post',
                [
                  'col_classes' => 'col-12 col-md-6',
                ]
              );
            endwhile;
            ?>
          </div>

          <div class="mt-4">
            <?php
            // Paginación básica (usa el main query)
            the_posts_pagination([
              'mid_size'  => 2,
              'prev_text' => __('« Anteriores', 'textdomain'),
              'next_text' => __('Siguientes »', 'textdomain'),
            ]);
            ?>
          </div>
        <?php else : ?>
          <p>No hay publicaciones.</p>
        <?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
