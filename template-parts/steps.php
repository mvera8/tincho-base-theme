<?php
/**
 * Template Part: Steps (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$steps = array(
	array(
		'text' => 'Elegí día y hora del servicio',
		'icon' => 'calendar',
	),
	array(
		'text' => 'Te asignamos un/a profesional verificado/a',
		'icon' => 'profesional',
	),
	array(
		'text' => 'Disfrutá tu casa super limpia',
		'icon' => 'house',
	),
);

$defaults = [
  'section_bg'  => '',
];

$args = isset($args) ? wp_parse_args($args, $defaults) : $defaults;
?>

<section id="steps-section" class="position-relative <?php echo esc_attr( $args['section_bg'] ); ?>">
	<div class="container">
		<div class="bg-light rounded-3 overflow-hidden steps-section-inner position-relative">
			<div class="bg-dark p-4">
				<div class="row align-items-start">
					<?php foreach ( $steps as $index => $step ) : ?>
						<div class="col-lg-4 mb-4 mb-lg-0">
							<div class="row align-items-center">
								<div class="col-3">
									<?php
									get_template_part(
										'template-parts/icon',
										'stack',
										array(
											'icon_stack' => $step['icon'],
										)
									);
									?>
								</div>
								<div class="col-9">
									<h5 class="text-light mb-0"><?php echo esc_html( $step['text'] ); ?></h5>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
