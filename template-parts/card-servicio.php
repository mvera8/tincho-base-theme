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

$servicio_id = get_the_ID();
$servicio_card_image_field = get_field( 'servicios_cpt_card_imagen', $servicio_id );
$servicio_card_image = $servicio_card_image_field ? $servicio_card_image_field : get_cleanmax_image( 'card_placeholder' );
?>

<div class="col-12 col-sm-6 col-lg-3">
  <a href="<?php the_permalink(); ?>" class="text-decoration-none text-light">
    <div class="card servicio-card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
      <div class="position-relative">
        <!-- Imagen -->
        <?php if ( isset( $servicio_card_image ) ) : ?>
          <img
            src="<?php echo esc_url( $servicio_card_image ); ?>"
            class="w-100"
            loading="lazy"
            alt="<?php echo esc_attr( get_the_title() ); ?>" />
        <?php endif; ?>

        <!-- Overlay gradiente -->
        <div class="overlay-gradient position-absolute top-0 start-0 w-100 h-100"></div>

        <!-- Texto sobre la imagen -->
        <div class="servicio-overlay position-absolute top-0 start-0 text-white p-3 h-100 d-flex flex-column justify-content-end align-items-start w-100">
          <?php the_title( '<h4 class="mb-1 lh-sm">Limpieza de ', '</h4>' ); ?>

            <p class="servicio-excerpt small mb-2 opacity-0">
              <?php esc_html( the_excerpt() ); ?>
            </p>

            
          <span role="button" tabindex="0" class="servicio-cta btn btn-sm d-inline-flex align-items-center opacity-0 ps-0 bg-transparent text-light">
            Qué incluye
            <?php echo cleanmax_icon_selector('arrow-right'); ?>
          </span>
        </div>
      </div>
    </div>
  </a>
</div>

