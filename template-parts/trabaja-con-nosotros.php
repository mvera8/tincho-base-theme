<?php
/**
 * Template Part: Servicios (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section id="section-trabaja-con-nosotros" class="bg-secondary-light mb-5">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 ps-0">
				<img
					src="<?php the_cleanmax_image( 'slider_hogares' ); ?>"
					alt="Trabaja con Nosotros"
					class="img-fluid w-100"
					loading="lazy"
				/>
			</div>
			<div class="col-12 col-md-6">
				<div class="py-5 ps-5">
					<?php
					get_template_part(
						'template-parts/section',
						'title',
						array(
							'title' => 'Servicios',
							'lead'  => 'Limpieza profesional para cada espacio',
							'align' => 'left',
						)
					);

					get_template_part(
						'template-parts/btn',
						'multiuso',
						[
							'text' => '¿Cómo funciona?',
							'link' => '#section-steps',
							'class' => 'btn-outline-primary'
						]
					);
					?>
				</div>
			</div>
		</div>
	</div>
</section>
