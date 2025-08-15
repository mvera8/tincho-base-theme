<?php
/**
 * Template Name: Sobre Nosotros Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
?>

<header class="py-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<h1 class="mb-0 display-3 text-capitalize text-center">Sobre <?php bloginfo('name'); ?></h1>
			</div>
		</div>
	</div>
</header>

<section class="pt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/steps' );
get_template_part( 'template-parts/trabaja-con-nosotros' );
get_footer();