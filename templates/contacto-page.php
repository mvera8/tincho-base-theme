<?php
/**
 * Template Name: Contacto Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$form_id = get_field( 'formulario_cleanmax' );

get_header();
get_template_part( 'template-parts/navbar' );
?>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 mx-auto">
				<div id="formulario" class="p-5 rounded border bg-white">
					<?php
					the_title( '<h1 class="mb-4">Formulario de ', '</h1>' );
					if ( $form_id ) {
							echo do_shortcode( '[contact-form-7 id="' . $form_id . '"]' );
					}
					?>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="bg-secondary px-4 pt-5 pb-1 rounded">
					<div class="widget mb-4">
						<h4 class="mb-2 text-primary">Otros Medios</h4>
						<?php
						get_template_part(
							'template-parts/list',
							'contact',
							array(
								'style' => 'unstyled'
							)
						);
						?>
					</div>
					<div class="widget mb-4">
						<h4 class="mb-2 text-primary">Redes</h4>
						<?php
						get_template_part(
							'template-parts/list',
							'redes',
							array(
								'style' => 'unstyled'
							)
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/faqs' );
get_footer();
