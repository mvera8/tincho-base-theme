<?php
/**
 * Template Part: Card Servicio (Bootstrap 5)
 * Variables vía get_template_part(..., ..., $args)
 *
 * Args esperados:
 * - thumbnail_size (string) por ej. 'medium'
 * - show_excerpt (bool)
 * - excerpt_length (int)
 * - show_date (bool)
 * - card_classes (string)
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div class="col-12 col-md-4">
  <a href="<?php the_permalink(); ?>">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
      <div class="position-relative">
        <!-- Imagen -->
        <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( $args['thumbnail_size'], [
            'class' => 'card-img-top',
            'alt'   => the_title_attribute(['echo' => false]),
          ] ); ?>
        </a>
      <?php endif; ?>
        <img
          src="https://images.unsplash.com/photo-1580137189272-c9379f8864fd?auto=format&fit=crop&w=800&q=80"
          class="w-100"
          loading="lazy"
          alt="House in Lauterbrunnen" />

        <!-- Overlay gradiente -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(90deg, rgba(0,0,0,0.6) 40%, rgba(0,0,0,0) 100%);"></div>

        <!-- Texto sobre la imagen -->
        <div class="position-absolute top-0 start-0 text-white p-3 h-100 d-flex flex-column justify-content-between w-100">
          <h4 class="mb-1"><?php the_title(); ?></h4>
          <button class="btn btn-light btn-sm mt-2 rounded-pill px-3">Ver Más</button>
        </div>
      </div> <!-- /.position-relative -->
    </div>
  </a>
</div>     <!-- /.col -->
