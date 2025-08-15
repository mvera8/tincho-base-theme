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

		<div class="row align-items-stretch">
			<?php foreach ( $steps as $step ) : ?>
				<div class="col-md-4 mb-4 d-flex">
					<div class="card px-2 pt-2 pb-0 bg-white border-0 shadow rounded h-100 w-100">
						<div class="card-body d-flex flex-column">
							<div class="mb-4">
								<img
									src="<?php the_cleanmax_image( 'clean' ); ?>"
									alt="<?php echo esc_attr( $step ); ?>"
									class="img-fluid"
									loading="lazy"
								/>
							</div>
							<p class="lead mb-0"><?php echo esc_html( $step ); ?></p>
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
				'text' => '¿Cómo funciona?',
				'link' => '#section-steps',
				'style' => 'btn-outline-primary'
			]
		);
		?>
	</div>
</section>
