<?php
/**
 * Template Part: Steps (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$steps = array(
	'Elegí día y hora del servicio',
	'Te asignamos un/a profesional verificado/a',
	'Disfrutá tu casa super limpia',
);

$steps = array(
	array(
		'title' => 'Solicitá un presupuesto',
		'text'  => 'Ya sea por Whatsapp o por nuestro formulario online.',
		'link'  => '/solicita-tu-presupuesto/',
	),
	array(
		'title' => 'La Limpieza',
		'text'  => 'Te asignamos un/a profesional verificado/a con productos de alta calidad.',
	),
	array(
		'title' => 'Disfrutá tu casa super limpia',
		'text'  => 'Nos adaptamos a tu disponibilidad, incluso fines de semana y feriados.',
	),
);
?>

<section id="section-steps" class="py-5">
	<div class="container">
		<?php
		get_template_part(
			'template-parts/section',
			'title',
			array(
				'title' => '¿Cómo funciona?',
			)
		);
		?>

		<div class="row align-items-stretch mb-4">
			<?php foreach ( $steps as $index => $step ) :
				$number_step = $index + 1;
				?>
				<div class="col-md-4 mb-4 d-flex">
					<div class="card px-2 pt-2 pb-0 border rounded h-100 w-100 text-center">
						<div class="card-body d-flex flex-column align-items-center">
							<div class="mb-4 position-relative d-flex">
								<?php
								get_template_part(
									'template-parts/badge',
									null,
									array(
										'text'  => 'Paso ' . $number_step,
										'class' => 'position-absolute top-0 start-0 translate-middle'
									)
								);
								?>
								<img
									src="<?php the_cleanmax_image( 'clean' ); ?>"
									alt="<?php echo esc_attr( $step['title'] ); ?>"
									class="img-fluid"
									loading="lazy"
								/>
							</div>
							<div class="px-4">
								<h5 class="mb-2"><?php echo esc_html( $step['title'] ); ?></h5>
								<p class="mb-0"><?php echo esc_html( $step['text'] ); ?></p>
								<?php
								if ( isset( $step['link'] ) ) {
									printf(
										'<a href="%s" class="btn btn-link text-decoration-none">Ver Más</a>',
										esc_url( home_url( $step['link'] ) ),
									);
								}
								?>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="text-center pt-2">
		<?php
		get_template_part(
			'template-parts/btn',
			'multiuso',
			[
				'text'  => 'Ver Servicios',
				'link'  => '#section-servicios',
				'class' => 'btn-outline-primary'
			]
		);
		?>
	</div>
</section>
