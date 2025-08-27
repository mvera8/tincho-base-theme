<?php
/**
 * Template Name: Home Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
get_template_part( 'template-parts/home-slider' );
get_template_part( 'template-parts/steps' );
get_template_part( 'template-parts/servicios' );
get_template_part( 'template-parts/posts' );

?>


<section class="mb-5">
	<div class="container">
		<div class="row g-0 rounded overflow-hidden">
			<div class="col-12 col-md-6 bg-primary-light">
				<div class="p-5">
					<h3 class="mb-2">Trabajá con nosotros</h3>
					<p class="pe-5">Sumate a nuestro equipo! Nos proponemos satisfacer las necesidades de nuestros clientes, ayudándolos a estar más cerca!</p>
					<?php
					get_template_part(
						'template-parts/btn',
						'multiuso',
						[
							'text'  => 'Sumarme',
							'link'  => '/trabaja-con-nosotros/',
							'class' => 'btn-primary',
						]
					);
					?>
				</div>
			</div>
			<div class="col-12 col-md-6 bg-secondary-light">
				<div class="p-5">
					<h3>Trabajá con nosotros</h3>
					<p class="pe-5">Sumate a nuestro equipo! Nos proponemos satisfacer las necesidades de nuestros clientes, ayudándolos a estar más cerca!</p>
					<?php
					get_template_part(
						'template-parts/btn',
						'multiuso',
						[
							'text'  => 'Sumarme',
							'link'  => '/trabaja-con-nosotros/',
							'class' => 'btn-secondary',
						]
					);
					?>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
// get_template_part( 'template-parts/choose' );
get_footer();
