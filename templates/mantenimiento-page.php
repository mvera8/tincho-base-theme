<?php
/**
 * Template Name: Mantenimiento Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section>
	<div class="carousel hero bg-primary">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php the_cleanmax_image( 'productos' ); ?>" class="bg-img" alt="Hogares">
				<div class="bg-overlay bg-overlay--blue"></div>

				<div class="slide-content container vh-100 row align-items-center justify-content-center mx-auto">
					<div class="text-center">
						<?php
						get_template_part( 'template-parts/logo' );
						?>
					</div>
				</div><!-- /.slide-content -->
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
