<?php
/**
 * Template Name: Home Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
get_template_part( 'template-parts/home-slider' );
get_template_part( 'template-parts/steps' );
get_template_part( 'template-parts/servicios' );
?>



<div class="carousel hero">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php the_cleanmax_image( 'productos' ); ?>" class="bg-img" alt="Hogares">
      <div class="bg-overlay"></div>

			<div class="slide-content py-5">
			<div class="container">
		<div class="row align-items-center h-100">
			<div class="col-md-5 h-100">
				
				


			</div>
			<div class="col-md-6 offset-md-1">
				<?php
				get_template_part(
					'template-parts/section',
					'title',
					array(
						'title' => 'Sobre Nosotros',
						'align' => 'left',
					)
				);
				?>

				<p class="lead mb-2">Exceptional level of cleaning services.</p>
				<p>Founded in 1995 Cleanmate quickly built a reputation as one of the leading providers of residential and commercial cleaning solutions. Our continuous pursuit for perfection has resulted in consistent growth each year. Our focus is to listen to our clients, understand their needs and provide the exceptional level of residential and commercial cleaning service.</p>

				<p>Founded in 1995 Cleanmate quickly built a reputation as one of the leading providers of residential and commercial cleaning solutions. Our continuous pursuit for perfection has resulted in consistent growth each year. Our focus is to listen to our clients, understand their needs and provide the exceptional level of residential and commercial cleaning service.</p>

				<p>Founded in 1995 Cleanmate quickly built a reputation as one of the leading providers of residential and commercial cleaning solutions. Our continuous pursuit for perfection has resulted in consistent growth each year. Our focus is to listen to our clients, understand their needs and provide the exceptional level of residential and commercial cleaning service.</p>

				<?php
				get_template_part(
					'template-parts/btn',
					'multiuso',
					[
						'text' => '¿Cómo funciona?',
						'link' => '#section-steps',
						'class' => 'btn-outline-primary'
					]
				);
				?>

			</div>
		</div>
	</div>
      </div><!-- /.slide-content -->
		</div>
	</div>
</div>



<section class="py-5 bg-primary-light">
	<div class="container">
		<div class="row align-items-center h-100 bg-warning">
			<div class="col-md-5 h-100 bg-secondary">
				
				<div class="row h-100 bg-success">
					<div class="col-6">
						<div class="mb-4">
							<div class="bg-primary h-100 rounded"></div>
						</div>
						<div>
							<div class="bg-primary h-100 rounded"></div>
						</div>
					</div>

					<div class="col-6">
						<div class="bg-primary h-100 rounded"></div>
					</div>
				</div>


			</div>
			<div class="col-md-6 offset-md-1">
				<?php
				get_template_part(
					'template-parts/section',
					'title',
					array(
						'title' => 'Sobre Nosotros',
						'align' => 'left',
					)
				);
				?>

				<p class="lead mb-2">Exceptional level of cleaning services.</p>
				<p>Founded in 1995 Cleanmate quickly built a reputation as one of the leading providers of residential and commercial cleaning solutions. Our continuous pursuit for perfection has resulted in consistent growth each year. Our focus is to listen to our clients, understand their needs and provide the exceptional level of residential and commercial cleaning service.</p>
				
				<?php
				get_template_part(
					'template-parts/btn',
					'multiuso',
					[
						'text' => '¿Cómo funciona?',
						'link' => '#section-steps',
						'class' => 'btn-outline-primary'
					]
				);
				?>

			</div>
		</div>
	</div>
</section>


<?php
get_template_part( 'template-parts/choose' );
get_template_part( 'template-parts/posts' );
// get_template_part( 'template-parts/faqs' );
// get_template_part( 'template-parts/trabaja-con-nosotros' );
get_footer();
