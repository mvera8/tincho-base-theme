<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
?>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<?php
				the_title( '<h1 class="mb-5 h2 text-center">', '</h1>' );
				the_content();
				?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();