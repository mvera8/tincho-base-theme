<?php
/**
 * Template Name: Solicita Presupuesto Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
get_template_part(
  'template-parts/page',
  'title',
  ['page_title'  => get_the_title() ]
);
?>

<section class="pt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<?php
				get_template_part('template-parts/form-example');
				?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();