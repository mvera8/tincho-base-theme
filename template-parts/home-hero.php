<?php
/**
 * Template Part: Home Hero (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$defaults = [
  'hero_title' => 'Tu casa <span class="degradado-text">impecable</span>, sin mover un dedo',
];

$args = isset($args) ? wp_parse_args($args, $defaults) : $defaults;
?>

<section id="home-hero" class="pt-5 position-relative hero-test mb-5">
	<div class="container pt-3 pb-5">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start text-dark">
				<div class="row">
					<div class="col-lg-11">
						<h1 class="display-3 mb-4">
							<?php echo wp_kses_post( $args['hero_title'] ); ?>
						</h1>
					</div>
					<div class="col-lg-8 pb-5">
						<p class="lead mb-0"><?php bloginfo( 'description' ); ?></p>
					</div>
					<div class="col-lg-12 pb-5">
						<a class="btn btn-primary btn-lg border-0 me-2" href="#!">
							Pedir Presupuesto
							<?php echo cleanmax_icon_selector( 'arrow-up-right' ); ?>
						</a>
						<a class="btn btn btn-outline-dark btn-lg border-0" href="#!">
							¿Cómo funciona?
						</a>
					</div>
					<div class="col-4 text-center">
						<h2 class="h2">⭐ 4.8</h2>
						<p>Reviews</p>
					</div>
					<div class="col-4 text-center">
						<h2 class="h2">💬 185</h2>
						<p>Comments</p>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-md-1">
				<img src="https://placehold.co/800x700" alt="Persona limpiando" class="img-fluid" />
			</div>
		</div>
	</div>
</section>
