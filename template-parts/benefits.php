<?php
/**
 * Template Part: Benefits (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$benefits = array(
	'Personal capacitado y verificado',
	'Productos de limpieza incluidos',
	'Horarios flexibles',
	'Presupuestos claros y sin sorpresas',
);

$defaults = [
  'section_bg'    => 'border-bottom',
	'check_color'   => 'text-secondary border-secondary',
	'section_badge' => 'primary-light',
];

$args = isset($args) ? wp_parse_args($args, $defaults) : $defaults;
?>

<section class="py-5 <?php echo esc_attr( $args['section_bg'] ); ?>">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 pe-0 pe-md-5">
				<img src="https://placehold.co/800x700" alt="Persona limpiando" class="img-fluid mb-4">
			</div>
			
			<div class="col-lg-6">
				<div class="row justify-content-start">
					<div class="col-8">
						<?php
						get_template_part(
							'template-parts/badge',
							null,
							array(
								'text'  => 'Por qué Nosotros?',
								'class' => $args['section_badge']
							)
						);
						?>
						<h2 class="fw-bold mb-4">Porque tenemos los mejor de lo mejor</h2>
					</div>
					<?php foreach ( $benefits as $benefit ) : ?>
						<div class="col-md-6">
							<div class="info">
								<?php
								get_template_part(
									'template-parts/icon',
									'stack',
									array(
										'icon_stack' => 'check',
										'icon_color' => $args['check_color'],
									)
								);
								?>
								<h5 class="mb-2 fw-bold"><?php echo esc_html( $benefit ); ?></h5>
								<p>We get insulted by others, lose trust for those We get back freezes</p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>



