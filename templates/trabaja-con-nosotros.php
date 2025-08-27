<?php
/**
 * Template Name: Trabaja Con Nosotros Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
?>

<section id="home-hero" class="pt-5 position-relative hero-test">
	<div class="container pt-3 pb-5">
		<div class="row align-items-center justify-content-center">
			
			<div class="col-lg-5">
				<img src="https://placehold.co/800x700" alt="Persona limpiando" class="img-fluid" />
			</div>
			<div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start text-dark offset-md-1">
				<div class="row">
					<div class="col-lg-11">
						
						<?php the_title( '<h1 class="display-3 mb-4">', '</h1>' ); ?>
						
					</div>
					<div class="col-lg-8 pb-5">
						<p class="lead mb-0">lalala</p>
					</div>
					<div class="col-lg-12 pb-5">
						<?php
						get_template_part( 'template-parts/btn-solicita-presupuesto' );
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="py-5 bg-primary text-white">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<p>Para coordinar una entrevista, presione el botón y complete el formulario.</p>
				<p>Una vez completo el formulario, le enviaremos la fecha y hora para asistir a la entrevista.</p>
			</div>
			<div class="col-12 col-md-6">
				aaa
			</div>
		</div>
	</div>
</section>


<?php
get_footer();