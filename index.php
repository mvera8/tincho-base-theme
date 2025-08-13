<?php
get_header();
get_template_part( 'template-parts/navbar' );
?>

<div class="container py-5">
  <?php if ( have_posts() ) : ?>
    <div class="row g-4">
      <?php
      while ( have_posts() ) :
        the_post();

        // Parámetros que le pasamos al template de la card
        get_template_part(
          'template-parts/card',
          'post',
          [
            'thumbnail_size'  => 'medium',
            'show_excerpt'    => true,
            'excerpt_length'  => 20,
            'show_date'       => true,
            'card_classes'    => 'h-100',
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

<?php
get_footer();
