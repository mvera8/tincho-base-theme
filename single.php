<?php
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
?>

<header class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
					<?php the_title( '<h1 class="mb-01 text-capitalize text-center">', '</h1>' ); ?>
			</div>
		</div>
	</div>
</header>

<section class="pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-9">
				<?php the_post_thumbnail('', array('class' => 'img-fluid mb-5 rounded')); ?>
			</div>
			<div class="col-12 col-md-8">
				<?php
				the_content();
				?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();