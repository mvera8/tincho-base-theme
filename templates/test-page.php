<?php
/**
 * Template Name: Test Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$steps = array(
	array(
		'text'  => 'Elegí día y hora del servicio',
		'icon'  => 'calendar',
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

get_header();
get_template_part( 'template-parts/navbar' );
?>

<section id="home-hero" class="pt-5 position-relative hero-test">
	<div class="container pt-3 pb-5">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start text-dark">
				<div class="row">
					<div class="col-lg-11">
						<h1 class="display-3 mb-4">
							Tu casa <span class="degradado-text">impecable</span>, sin mover un dedo
						</h1>
					</div>
					<div class="col-lg-8 pb-5">
						<p class="lead mb-0">Reservá un servicio de limpieza profesional en minutos</p>
					</div>
					<div class="col-lg-12 pb-5">
						<a class="btn btn-success bg-success-btn btn-lg border-0 me-2" href="#!">
							Pedir Presupuesto
							<?php echo cleanmax_icon_selector( 'arrow-up-right' ); ?>
						</a>
						<a class="btn btn btn-primary btn-lg" href="#!">
							¿Cómo funciona?
						</a>
					</div>
					<div class="col-4 text-center">
						<h2 class="h2">⭐ 4.8</h2>
						<p>Reviews</p>
					</div>
					<div class="col-4 text-center">
						<h2 class="h2">💬 185</h2>
						<p>Comments</p>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-md-1">
				<img src="https://placehold.co/800x700" alt="Persona limpiando" class="img-fluid" />
			</div>
		</div>
	</div>
</section>

<section class="py-5 bg-primary">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-5 text-white">
				<img src="https://placehold.co/800x700" alt="Persona limpiando" class="img-fluid mb-4">
			</div>
			<div class="col-md-6 offset-md-1 text-white">
				<h2 class="mb-4">Porqué Elegirnos</h2>
				<p> Descubre nuestros servicios y productos diseñados para hacer tu vida más fácil y limpia.</p>

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
											'icon_color' => 'text-success border-success',
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

<section class="py-5">
	<div class="container">
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
									'size'       => 'lg',
									'icon_stack' => $step['icon'],
								)
							);
							?>
						</div>
						<div class="col-9">
							<h5 class="mb-0"><?php echo esc_html( $step['text'] ); ?></h5>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto text-center">
				<h2 class="mb-5">Why Realtime Colors?</h2>
			</div>
		</div>
		<div class="row align-items-start">
			<?php foreach ( $steps as $index => $step ) : ?>
				<div class="col-lg-4 mb-4 mb-lg-0">
					<div class="bg-primary-light p-5 rounded text-center">
						<?php
						get_template_part(
							'template-parts/icon',
							'stack',
							array(
								'size'       => 'lg',
								'icon_stack' => $step['icon'],
							)
						);
						?>
						<h5 class="mb-0"><?php echo esc_html( $step['text'] ); ?></h5>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>



<section class="py-5">
	<div class="container">
		<div class="row mb-4">
			<div class="col-lg-8">
				<div class="bg-primary text-white p-5 rounded text-center">
					<h1>Probando</h1>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="bg-success p-5 rounded text-center">
					<h1>Probando</h1>
				</div>
			</div>
		</div>

		<div class="row mb-4">
			<div class="col-lg-7">
				<div class="bg-dark text-white p-5 rounded text-center">
					<h1>Probando</h1>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="bg-secondary p-5 rounded text-center">
					<h1>Probando</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="bg-success-light p-5 rounded">
			<div class="row">
				<div class="col-lg-4 mx-auto">
					<h2 class="mb-4">How Does it Work?</h2>
					<p class="lead mb-0">Get your personalized color palette in 4 steps.</p>
				</div>

				<div class="col-lg-8 mx-auto">
					<h1 class="mb-4">Probando</h1>
					<p class="lead mb-0">Probando</p>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/last-cta' );
get_footer();