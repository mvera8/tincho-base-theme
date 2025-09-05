<?php
/**
 * Template Part: Home Slider (Bootstrap 5) — desde CPT "servicios"
 */

defined( 'ABSPATH' ) || exit;

$carousel_id = 'carouselHomeFade';

// --- Query súper liviana: traemos solo IDs y luego resolvemos título/imagen ---
$service_ids = get_posts( [
  'post_type'              => 'servicios',
  'post_status'            => 'publish',
  'posts_per_page'         => 4,
  'orderby'                => 'menu_order',
  'order'                  => 'ASC',
  'no_found_rows'          => true,
  'update_post_term_cache' => false,
  'suppress_filters'       => false,
  'fields'                 => 'ids',
] );

// Fallback si no hay servicios
if ( empty( $service_ids ) ) {
  return;
}

// Pre-armamos un array con título e imagen (así simplificamos abajo)
$slides = [];
foreach ( $service_ids as $sid ) {
  $title   = get_the_title( $sid );
  $img_id  = get_post_thumbnail_id( $sid );
  $img_url = '';

  // si existe la función get_field (ACF activo)
  if ( function_exists( 'get_field' ) ) {
      $acf_img = get_field( 'servicios_cpt_slider_imagen', $sid ); // $sid es el ID del CPT "servicio"
      if ( ! empty( $acf_img ) ) {
          // si es un campo imagen de ACF, puede devolver array o string según configuración
          $img_url = is_array( $acf_img ) ? $acf_img['url'] : $acf_img;
      }
  }

  // si no hay imagen especial en ACF, usamos la destacada
  if ( empty( $img_url ) ) {
      $img_id  = get_post_thumbnail_id( $sid );
      $img_url = $img_id ? wp_get_attachment_image_url( $img_id, 'full' ) : '';
  }

  if ( $img_url ) {
    $slides[] = [
      'title'   => $title,
      'img_url' => $img_url,
    ];
  }
}

// Si por algún motivo ningún slide tiene imagen, no renderizamos
if ( empty( $slides ) ) {
  return;
}
?>

<section class="mb-5">
  <div id="<?php echo esc_attr( $carousel_id ); ?>" class="carousel slide carousel-fade hero bg-dark" data-bs-ride="carousel" aria-label="Slider principal" >

    <div class="carousel-indicators">
      <?php foreach ( $slides as $i => $_ ): ?>
        <button type="button"
          data-bs-target="#<?php echo esc_attr( $carousel_id ); ?>"
          data-bs-slide-to="<?php echo esc_attr( $i ); ?>"
          <?php if ( $i === 0 ): ?>class="active" aria-current="true"<?php endif; ?>
          aria-label="Slide <?php echo esc_attr( $i + 1 ); ?>"></button>
      <?php endforeach; ?>
    </div>

    <div class="carousel-inner">
      <?php foreach ( $slides as $i => $item ):
        $is_active = ( $i === 0 ) ? ' active' : '';
        $loading   = ( $i === 0 ) ? '' : ' loading="lazy"';
      ?>
        <div class="carousel-item<?php echo esc_attr( $is_active ); ?>">
          <img src="<?php echo esc_url( $item['img_url'] ); ?>" class="bg-img" alt="<?php echo esc_attr( $item['title'] ); ?>"<?php echo $loading; ?>>
          <div class="bg-overlay"></div>

          <div class="slide-content py-0 py-md-5">
            <div class="container py-5">
              <div class="row">
                <div class="col-12 col-md-10 col-xl-7 text-center text-md-start">
                  <p class="text-white mb-2"><?php echo get_bloginfo( 'name' ) . ' ' . $item['title']?></p>
                  <h1 class="display-1 mb-2 text-secondary">máxima <span class="text-primary text-uppercase">LIMPIEZA</span></h1>
                  <p class="mb-4 lead text-light">Limpieza profesional para cada espacio.</p>
                  <div class="d-block d-md-flex gap-2 justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <?php
                    get_template_part( 'template-parts/btn-solicita-presupuesto' );
                    get_template_part(
                      'template-parts/btn',
                      'multiuso',
                      [
                        'text' => '¿Cómo funciona?',
                        'link' => '#section-steps',
                      ]
                    );
                    ?>
                  </div>
                  <?php get_template_part( 'template-parts/list-raitings' ); ?>
                </div>
              </div>
            </div>
          </div><!-- /.slide-content -->
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
