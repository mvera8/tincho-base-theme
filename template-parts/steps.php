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
				'section_title' => '¿Cómo funciona?',
			)
		);
		?>
		<div class="row align-items-stretch">
			<?php foreach ( $steps as $step ) : ?>
				<div class="col-md-4 mb-4 d-flex">
					<div class="card px-2 pt-2 pb-0 border-0 bg-secondary-light h-100 w-100">
						<div class="card-body d-flex flex-column">
							<?php
							get_template_part(
								'template-parts/icon',
								'stack',
								array(
									'icon_stack'  => 'check',
									'icon_color'  => 'text-secondary-light bg-dark',
									'icon_margin' => 'mb-5',
								)
							);
							?>
							<p class="lead mb-0"><?php echo esc_html( $step ); ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
