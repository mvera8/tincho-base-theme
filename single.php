<?php
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
?>

<header class="py-4 py-md-5 bg-degradado-white-top">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8">
				<h1 class="mb-0 display-3 text-capitalize text-center"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</header>

<section class="pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-9">
				<?php the_post_thumbnail('', array('class' => 'img-fluid mb-5 rounded')); ?>
			</div>
			<div class="col-12 col-lg-8">
				<?php
				the_content();
				?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();