<?php
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );

$servicio_title = 'Limpieza de ' . get_the_title();
$cleanmax_title = get_bloginfo('name') . ' ' . get_the_title();
?>

<section>
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

				<div class="slide-content py-5 container">
					<div class="row justify-content-center">
						
						<div class="col-12 col-md-6  text-dark">
							<?php
							get_template_part('template-parts/form-servicios');
							?>
						</div>
						<div class="col-12 col-md-5 py-5 offset-md-1">
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
					</div>
				</div><!-- /.slide-content -->
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/faqs' );
get_footer();