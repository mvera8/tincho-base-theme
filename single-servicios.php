<?php
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );

$servicio_title = 'Limpieza de ' . get_the_title();
?>

<section id="servicio-hero" class="position-relative border-bottom bg-degradado-white-top">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-center">
			<div class="col-12 col-md-4 offset-md-2">
				<h1 class="display-3 mb-4"><?php echo esc_html( $servicio_title ); ?></h1>
				<?php
				get_template_part( 'template-parts/btn-solicita-presupuesto' );
				?>
			</div>
			<div class="col-12 col-md-6 px-0">
				<img
					src="<?php the_cleanmax_image( 'slider_hogares' ); ?>"
					alt="Trabaja con Nosotros"
					class="img-fluid w-100"
					loading="lazy"
				/>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
	<div class="carousel hero">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php the_cleanmax_image( 'productos' ); ?>" class="bg-img" alt="Hogares">
				<div class="bg-overlay"></div>

				<div class="slide-content py-5">
					<div class="row">
						<div class="col-md-6 px-5">
							<?php
							the_content();
							?>
						</div>
					</div>
				</div><!-- /.slide-content -->
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="bg-secondary-light p-5 rounded">
			<div class="row">
				<div class="col-lg-4 mx-auto">
					<h2 class="mb-4 text-capitalize">Solicita tu cotización por <?php echo esc_html( $servicio_title ); ?></h2>
					<p class="lead mb-0"></p>
				</div>

				<div class="col-lg-8 mx-auto">
					<?php
					get_template_part('template-parts/form-example');
					?>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();