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

get_header();
get_template_part( 'template-parts/navbar' );
?>

<section class="py-4 py-md-5">
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

<section class="py-4 py-md-5">
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



<section class="py-4 py-md-5">
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

<section class="py-4 py-md-5">
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

<section class="mb-5">
	<div class="container">
		<div class="row g-0 rounded overflow-hidden">
			<div class="col-12 col-md-6 bg-primary-light">
				<div class="p-5">
					<h3 class="mb-2">Trabajá con nosotros</h3>
					<p class="pe-5">Sumate a nuestro equipo! Nos proponemos satisfacer las necesidades de nuestros clientes, ayudándolos a estar más cerca!</p>
					<?php
					get_template_part(
						'template-parts/btn',
						'multiuso',
						[
							'text'  => 'Sumarme',
							'link'  => '/trabaja-con-nosotros/',
							'class' => 'btn-primary',
						]
					);
					?>
				</div>
			</div>
			<div class="col-12 col-md-6 bg-secondary-light">
				<div class="p-5">
					<h3>Trabajá con nosotros</h3>
					<p class="pe-5">Sumate a nuestro equipo! Nos proponemos satisfacer las necesidades de nuestros clientes, ayudándolos a estar más cerca!</p>
					<?php
					get_template_part(
						'template-parts/btn',
						'multiuso',
						[
							'text'  => 'Sumarme',
							'link'  => '/trabaja-con-nosotros/',
							'class' => 'btn-secondary',
						]
					);
					?>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="py-4 py-md-5">
	<div class="container">
		<?php
		get_template_part('template-parts/form-servicios');
		?>
	</div>
</section>

<?php
get_template_part( 'template-parts/last-cta' );
get_footer();