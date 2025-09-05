<?php
/**
 * Template Name: Formulario Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$form_id = get_field( 'formulario_cleanmax' );

get_header();
get_template_part( 'template-parts/navbar' );
?>

<section id="section-trabaja-con-nosotros" class="bg-degradado-blue-bottom border-top border-white">
	<div class="container-fluid px-0">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-5 offset-lg-1 col-xl-4 offset-xl-2">
				<div class="py-4 py-lg-5 ps-4 ps-xl-5 text-light">
					<?php
					the_title( '<h1 class="display-4 my-0 my-lg-4">', '</h1>' );

					the_content();

					get_template_part(
						'template-parts/btn',
						'multiuso',
						[
							'text' => 'Ver formulario',
							'link' => '#formulario',
							'class' => 'btn-outline-secondary d-none d-lg-inline'
						]
					);
					?>
				</div>
			</div>

			<div class="col-lg-6 col-xl-6">
				<?php the_post_thumbnail('', array('class' => 'img-fluid w-100')); ?>
			</div>
		</div>
	</div>
</section>

<section class="py-4 py-md-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<?php
				get_template_part(
					'template-parts/contact',
					'form',
					array(
						'form_id' => $form_id
					)
				);
				?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
