<?php
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );

$servicio_title = 'Limpieza de ' . get_the_title();
$cleanmax_title = get_bloginfo('name') . ' ' . get_the_title();
?>

<section>
	<div class="carousel hero">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php the_cleanmax_image( 'productos' ); ?>" class="bg-img" alt="Hogares">
				<div class="bg-overlay bg-overlay--blue"></div>

				<div class="slide-content py-5 container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-5 py-5">
							<?php
							get_template_part(
								'template-parts/badge',
								null,
								array( 'text' => get_bloginfo('description') )
							);
							?>
							<h1 class="display-2 mb-4"><?php echo esc_html( $cleanmax_title ); ?></h1>
							<div class="lead pe-5">
								<?php
								the_content();
								get_template_part( 'template-parts/list-raitings' );
								?>
							</div>
						</div>
						<div class="col-12 col-md-6 offset-md-1 text-dark">
							<?php
							get_template_part('template-parts/form-example');
							?>
						</div>
					</div>
				</div><!-- /.slide-content -->
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/faqs' );
get_footer();