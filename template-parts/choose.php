<?php
/**
 * Template Part: Elegirnos (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$choose = array(
	array(
		'title' => 'Personal capacitado y verificado',
		'text'  => 'Verificación de antecedentes y formación continua para asegurar un servicio profesional y de confianza.',
	),
	array(
		'title' => 'Productos de limpieza incluidos',
		'text'  => 'Usamos productos de alta calidad y seguros para el hogar, sin costo adicional.',
	),
	array(
		'title' => 'Horarios flexibles',
		'text'  => 'Nos adaptamos a tu disponibilidad, incluso fines de semana y feriados.',
	),
	array(
		'title' => 'Presupuestos claros y sin sorpresas',
		'text'  => 'Precio cerrado desde el inicio, sin cargos ocultos.',
	),
);
?>

<section class="py-5 bg-primary">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-5 text-white">
				<img src="https://placehold.co/800x700" alt="Persona limpiando" class="img-fluid mb-4">
			</div>
			<div class="col-md-6 offset-md-1">
				<h2 class="mb-4 text-white">Porqué Elegirnos</h2>

				<div class="row align-items-stretch">
					<?php foreach ( $choose as $index => $item ) : ?>
						<div class="col-md-6 mb-4 d-flex">
							<div class="card border-0 bg-transparent h-100 w-100">
								<div class="card-body p-0 d-flex flex-column">
									<?php
									get_template_part(
										'template-parts/icon',
										'stack',
										array(
											'icon_stack' => 'check',
											'icon_color' => 'text-primary bg-secondary-light',
											'icon_margin' => 'mb-4',
										)
									);
									?>
									<h5 class="mb-2 text-white"><?php echo esc_html( $item['title'] ); ?></h5>
									<p class="mb-0 text-white"><?php echo esc_html( $item['text'] ); ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

			</div>
		</div>
	</div>
</section>
