<?php
/**
 * Template Part: Steps (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$steps = array(
	array(
		'title' => 'Solicitá un presupuesto',
		'text'  => 'Ya sea por Whatsapp o por nuestro formulario online.',
		'icon'  => 'tel',
		'link'  => '/solicita-tu-presupuesto/',
	),
	array(
		'title' => 'La Limpieza',
		'text'  => 'Te asignamos un/a profesional verificado/a con productos de alta calidad.',
		'icon'  => 'escoba',
	),
	array(
		'title' => 'Disfrutá tu casa super limpia',
		'text'  => 'Nos adaptamos a tu disponibilidad, incluso fines de semana y feriados.',
		'icon'  => 'casa',
	),
);
?>

<section id="section-steps" class="py-0 py-md-5">
	<div class="container">
		<?php
		get_template_part(
			'template-parts/title',
			'section',
			array(
				'title' => '¿Cómo funciona?',
				'lead'  => 'Pasos sencillos para tener una casa impecable.'
			)
		);
		?>

		<div class="row align-items-stretch mb-4">
			<?php foreach ( $steps as $index => $step ) :
				$number_step = $index + 1;
				?>
				<div class="col-md-4 mb-0 mb-md-4 d-flex">
					<div class="card cleanmax-steps border-0 rounded h-100 w-100 text-center">
						<div class="card-body d-flex flex-column align-items-center">
							<div class="mb-4 position-relative d-flex cleanmax-steps__icon">
								<img
									src="<?php the_cleanmax_image( $step['icon'], 'svg' ); ?>"
									alt="<?php echo esc_attr( $step['title'] ); ?>"
									class="img-fluid"
									loading="lazy"
								/>
							</div>
							<div class="px-0 px-lg-4">
								<h5 class="mb-2"><?php echo esc_html( $step['title'] ); ?></h5>
								<p class="mb-0"><?php echo esc_html( $step['text'] ); ?></p>
								<?php
								if ( isset( $step['link'] ) ) {
									printf(
										'<a href="%s" class="btn btn-link text-decoration-none">Ver Más %s</a>',
										esc_url( home_url( $step['link'] ) ),
										cleanmax_icon_selector( 'arrow-right' )
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
