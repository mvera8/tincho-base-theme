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

<div class="col-12 col-sm-6 col-lg-3">
  <a href="<?php the_permalink(); ?>">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
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
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/card_servicio.webp' ); ?>"
          class="w-100"
          loading="lazy"
          alt="House in Lauterbrunnen" />

        <!-- Overlay gradiente -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(90deg, rgba(0,0,0,0.6) 40%, rgba(0,0,0,0) 100%);"></div>

        <!-- Texto sobre la imagen -->
        <div class="position-absolute top-0 start-0 text-white p-3 h-100 d-flex flex-column justify-content-end align-items-start w-100">

          <div class="">
            <?php
            the_title( '<h4 class="mb-1">Limpieza de ', '</h4>' );
            the_excerpt();
            ?>
          </div>
          <button class="ps-0 btn bg-transparent text-light border-0 mt-2 rounded-pill px-3 d-inline-flex align-items-center w-auto">
            Ver Más
            <?php echo cleanmax_icon_selector('arrow-right'); ?>
          </button>

        </div>
      </div> <!-- /.position-relative -->
    </div>
  </a>
</div>
