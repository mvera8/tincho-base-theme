<?php
/**
 * Template Name: Home Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$choose = array(
	array(
		'title' => 'Limpieza impecable',
		'text'  => 'Tu espacio siempre listo y seguro.',
	),
	array(
		'title' => 'Equipo confiable',
		'text'  => 'Profesionales responsables y éticos',
	),
	array(
		'title' => 'Atención personalizada',
		'text'  => 'Soluciones a tu medida',
	),
	array(
		'title' => 'Flexibles y rápidos',
		'text'  => 'Nos adaptamos a lo que necesitás.',
	),
);

get_header();
get_template_part( 'template-parts/navbar' );
get_template_part( 'template-parts/home-slider' );
get_template_part( 'template-parts/steps' );
get_template_part( 'template-parts/servicios' );
?>

<section class="py-5 bg-primary mb-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-5 text-white">
				<img src="https://placehold.co/800x700" alt="¿Por qué elegirnos?" class="img-fluid mb-4 rounded">
			</div>
			<div class="col-md-6 offset-md-1">
				<?php
				get_template_part(
					'template-parts/section',
					'title',
					array(
						'title' => '¿Por qué elegirnos?',
						'lead'  => strip_tags( get_the_content() ),
						'color' => 'white',
						'align' => 'left',
					)
				);
				?>

				<div class="row align-items-stretch mt-5">
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
											'icon_color' => 'text-primary bg-secondary-light',
											'icon_margin' => 'mb-4',
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

<?php
get_template_part( 'template-parts/posts' );
get_footer();
