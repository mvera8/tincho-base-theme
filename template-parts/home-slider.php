<?php
/**
 * Template Part: Home Slider (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$slider = [
  [
		'title'=>'Hogares',
		'image'=>'slider_hogares',
	],
  [
		'title'=>'Oficinas',
		'image'=>'slider_oficina',
	],
];

$carousel_id = 'carouselHomeFade';
?>
<div id="<?php echo esc_attr($carousel_id); ?>" class="carousel slide carousel-fade hero" data-bs-ride="carousel" aria-label="Slider principal">

  <div class="carousel-indicators">
    <?php foreach ($slider as $i => $_): ?>
      <button type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide-to="<?php echo esc_attr($i); ?>" <?php if ($i===0): ?>class="active" aria-current="true"<?php endif; ?> aria-label="Slide <?php echo esc_attr($i+1); ?>"></button>
    <?php endforeach; ?>
  </div>

  <div class="carousel-inner">
    <?php foreach ($slider as $i => $item):
      $is_active = ($i===0) ? ' active' : '';
      $img_url   = get_stylesheet_directory_uri() . '/assets/images/' . $item['image'] . '.webp';
      $loading   = ($i===0) ? '' : ' loading="lazy"';
    ?>
      <div class="carousel-item<?php echo esc_attr($is_active); ?>">
        <img src="<?php echo esc_url($img_url); ?>" class="bg-img" alt="<?php echo esc_attr( $item['title'] ); ?>"<?php echo $loading; ?>>
        <div class="bg-overlay"></div>

        <div class="slide-content py-5">
          <div class="container py-5">
            <div class="row">
              <div class="col-lg-6 text-center text-lg-start">
								<h1 class="display-1 mb-2">
									<?php bloginfo('name'); ?> <?php echo esc_html( $item['title'] ); ?>
								</h1>
                <p class="lead mb-5"><?php bloginfo('description'); ?></p>
                <div class="d-flex gap-2 justify-content-center justify-content-lg-start">
                  <a class="btn btn-primary btn-lg border-0" href="#!">
                    Pedir Presupuesto <?php echo cleanmax_icon_selector('arrow-up-right'); ?>
                  </a>
                  <a class="btn btn-outline-light btn-lg border-0" href="#section-steps">¿Cómo funciona?</a>
                </div>

                <div class="row text-center mt-5">
                  <div class="col-4">
                    <h2 class="h2 mb-0">⭐ 4.8</h2><small>Puntaje</small>
                  </div>
                  <div class="col-4">
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
