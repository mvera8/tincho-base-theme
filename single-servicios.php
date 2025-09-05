<?php
defined( 'ABSPATH' ) || exit;

$servicio_title = get_the_title();
$cleanmax_title = get_bloginfo('name') . ' ' . $servicio_title;
$form_id = get_field( 'formulario_cleanmax' );

get_header();
get_template_part( 'template-parts/navbar' );
?>

<section class="mb-5">
	<div class="carousel hero bg-secondary">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<?php if ( has_post_thumbnail() ) : ?>
					<img
						src="<?php the_post_thumbnail_url( 'full' ); ?>"
						class="bg-img"
						loading="lazy"
						alt="<?php the_title(); ?>" />
				<?php endif; ?>
				<div class="bg-overlay bg-overlay--blue"></div>

				<div class="slide-content pt-0 pt-lg-5 pb-5 container">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-5 col-xl-5 py-4 py-lg-5">
							<?php
							get_template_part(
								'template-parts/badge',
								null,
								array( 'text' => get_bloginfo('description') )
							);
							?>
							<h1 class="display-2 mb-2 mb-md-4"><?php echo esc_html( $cleanmax_title ); ?></h1>
							<div class="lead pe-0 pe-md-5">
								<?php
								the_content();
								get_template_part( 'template-parts/list-raitings' );
								?>
							</div>
						</div>
						<div class="col-12 col-lg-7 col-xl-6 offset-xl-1 text-dark">
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
				</div><!-- /.slide-content -->
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/faqs' );
get_footer();