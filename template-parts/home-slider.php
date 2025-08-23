<?php
/**
 * Template Part: Home Slider (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$slider = [
  [
		'title'=>'Hogares',
		'image'=>'front',
	],
  [
		'title'=>'Oficinas',
		'image'=>'slider_oficina',
	],
];

$carousel_id = 'carouselHomeFade';
?>
<section class="mb-5">
  <div id="<?php echo esc_attr($carousel_id); ?>" class="carousel slide carousel-fade hero" data-bs-ride="carousel" aria-label="Slider principal">

    <div class="carousel-indicators">
      <?php foreach ($slider as $i => $_): ?>
        <button type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide-to="<?php echo esc_attr($i); ?>" <?php if ($i===0): ?>class="active" aria-current="true"<?php endif; ?> aria-label="Slide <?php echo esc_attr($i+1); ?>"></button>
      <?php endforeach; ?>
    </div>

    <div class="carousel-inner">
      <?php foreach ($slider as $i => $item):
        $is_active = ($i===0) ? ' active' : '';
        $img_url   = get_cleanmax_image( $item['image'] );
        $loading   = ($i===0) ? '' : ' loading="lazy"';
      ?>
        <div class="carousel-item<?php echo esc_attr($is_active); ?>">
          <img src="<?php echo esc_url($img_url); ?>" class="bg-img" alt="<?php echo esc_attr( $item['title'] ); ?>"<?php echo $loading; ?>>
          <div class="bg-overlay"></div>

          <div class="slide-content py-5">
            <div class="container py-5">
              <div class="row">
                <div class="col-lg-6 text-center text-lg-start">
                  <?php
                  get_template_part(
                    'template-parts/badge',
                    null,
                    array( 'text' => get_bloginfo('description') )
                  );
                  ?>
                  <h1 class="display-1 mb-4">
                    <?php bloginfo('name'); ?> <?php echo esc_html( $item['title'] ); ?>
                  </h1>
                  <div class="d-flex gap-2 justify-content-center justify-content-lg-start">
                    <?php
                    get_template_part( 'template-parts/btn-solicita-presupuesto' );
                    get_template_part(
                      'template-parts/btn',
                      'multiuso',
                      [
                        'text' => '¿Cómo funciona?',
                        'link' => '#section-steps'
                      ]
                    );
                    ?>
                  </div>

                  <div class="row text-center mt-5">
                    <div class="col-5">
                      <h2 class="h2 mb-0">⭐ 4.8</h2><small>Puntaje</small>
                    </div>
                    <div class="col-5">
                      <h2 class="h2 mb-0">💬 185</h2><small>Reseñas</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.slide-content -->
        </div>
      <?php endforeach; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</section>
