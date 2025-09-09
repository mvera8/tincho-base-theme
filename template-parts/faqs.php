<?php
/**
 * Template Part: FAQs (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$faqs = array(
	array(
		'question' => '¿Qué servicios de limpieza ofrecen?',
		'answer'   => 'Ofrecemos servicios de limpieza profesional para hogares, oficinas, edificios y locales comerciales. Cada servicio es personalizable para adaptarse a tus necesidades y horarios.',
	),
	array(
		'question' => '¿Qué incluye un servicio de limpieza estándar?',
		'answer'   => 'Una limpieza estándar incluye el desempolvado de superficies, aspirado y trapeado de pisos, limpieza de baños (inodoro, ducha, lavabo), limpieza de la cocina (encimeras, exterior de electrodomésticos, fregadero), limpieza de dormitorios y otros ambientes. Si necesitas una limpieza más profunda, podemos crear un plan a la medida.',
	),
	array(
		'question' => '¿Los productos y equipos de limpieza están incluidos?',
		'answer'   => 'Nuestro equipo utiliza los productos y equipamiento disponible en tu hogar. En caso de preferir que nosotros los proveamos, podemos incluirlos en la cotización.',
	),
	array(
		'question' => '¿El personal de limpieza está capacitado?',
		'answer'   => 'Si, hacemos foco en la capacitación y entrenamiento de nuestro equipo. Su trabajo está guiado por nuestros valores de calidad, responsabilidad e integridad. ',
	),
	array(
		'question' => '¿Cómo puedo solicitar un servicio?',
		'answer'   => 'Puedes contactarnos a través de nuestra página web, por mail o WhatsApp para solicitar una cotización. Juntos definiremos el plan de limpieza, el horario y la frecuencia que mejor se adapte a tus necesidades.',
	),
	array(
		'question' => '¿Qué métodos de pago aceptan?',
		'answer'   => 'Aceptamos pagos a través de transferencia bancaria. Los detalles de pago se te proporcionarán al confirmar la reserva de tu servicio.',
	),
	array(
		'question' => '¿Qué sucede si necesito cancelar o reprogramar?',
		'answer'   => 'Entendemos que pueden surgir imprevistos. Te pedimos que nos notifiques con al menos 24 horas de anticipación para cancelar o reprogramar tu servicio sin ningún cargo adicional.',
	),
	// array(
	// 	'question' => '',
	// 	'answer'   => '',
	// ),
);
?>

<section class="py-0 py-md-5">
	<div class="container">
		<?php
		get_template_part(
			'template-parts/title',
			'section',
			array(
				'title' => 'Preguntas frecuentes',
			)
		);
		?>

		<div class="row justify-content-center">
			<div class="col-12 col-lg-8">
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
						<div class="col-lg-7">
							<div class="card-body py-4">
								<h5 class="card-title mb-0">
									Todavia Tenes Preguntas?
								</h5>
							</div>
						</div>
						<div class="col-lg-5 text-center text-lg-end pb-4 pb-lg-0 pe-lg-4">
							<?php
							get_template_part(
								'template-parts/btn',
								'multiuso',
								[
									'text' => 'Contactanos',
									'link' => is_page_template( 'templates/contacto-page.php' ) ? '#formulario' : esc_url( home_url( '/contacto/' ) ),
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
