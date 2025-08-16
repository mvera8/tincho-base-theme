<?php
/**
 * Template Part: FAQs (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$faqs = array(
	array(
		'question' => '¿Cómo hago un pedido?',
		'answer'   => 'Para hacer un pedido, simplemente visita nuestra sección de reservas y elige el servicio que necesitas.',
	),
	array(
		'question' => '¿Cómo puedo pagar?',
		'answer'   => 'Aceptamos pagos con tarjeta de crédito, débito y PayPal. Puedes pagar al finalizar tu reserva.',
	),
	array(
		'question' => '¿Cuánto tiempo tarda en llegar mi pedido?',
		'answer'   => 'El tiempo de entrega varía según el servicio. Generalmente, los pedidos se procesan en un plazo de 24 horas.',
	),
	array(
		'question' => '¿Puedo revender los productos?',
		'answer'   => 'No, los productos adquiridos en nuestra tienda son para uso personal y no están destinados a la reventa.',
	),
);
?>

<section class="py-5">
	<div class="container">
		<?php
		get_template_part(
			'template-parts/section',
			'title',
			array(
				'title' => 'Preguntas frecuentes',
			)
		);
		?>

		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<div class="accordion" id="accordionRental">
					<?php
					foreach ( $faqs as $index => $faq ) : 
						$heading_id  = 'heading' . $index;
						$collapse_id = 'collapse' . $index;
						$is_first    = ( $index === 0 );
						?>
						<div class="accordion-item mb-3 rounded overflow-hidden">
							<h5 class="accordion-header" id="<?php echo esc_attr( $heading_id ); ?>">
									<button class="accordion-button border-bottom fw-semibold <?php echo $is_first ? '' : 'collapsed'; ?>" 
													type="button" 
													data-bs-toggle="collapse" 
													data-bs-target="#<?php echo esc_attr( $collapse_id ); ?>" 
													aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>" 
													aria-controls="<?php echo esc_attr( $collapse_id ); ?>">
											<?php echo esc_html( $faq['question'] ); ?>
											<i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
											<i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
									</button>
							</h5>
							<div id="<?php echo esc_attr( $collapse_id ); ?>" 
									class="accordion-collapse collapse <?php echo $is_first ? 'show' : ''; ?>" 
									aria-labelledby="<?php echo esc_attr( $heading_id ); ?>" 
									data-bs-parent="#accordionRental">
									<div class="accordion-body text-sm opacity-8">
											<?php echo esc_html( $faq['answer'] ); ?>
									</div>
							</div>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="card bg-secondary-light border-0 rounded my-5 overflow-hidden">
					<div class="row align-items-center justify-content-center">
						<div class="col-md-8">
							<div class="card-body py-4">
								<h4 class="card-title mb-0">
									Todavia Tenes Preguntas?
								</h4>
							</div>
						</div>
						<div class="col-md-4 text-end pe-4">
							<?php
							get_template_part(
								'template-parts/btn',
								'multiuso',
								[
									'text' => 'Contactanos',
									'link' => esc_url( home_url( '/contacto/' ) ),
									'class' => 'btn-dark',
								]
							);
							?>
						</div>
					</div>
				</div>
			</div>

			</div>
		</div>
	</div>
</section>
