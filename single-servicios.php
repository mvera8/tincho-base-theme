<?php
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
?>

<header class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
					<?php the_title( '<h1 class="mb-01 text-capitalize border-bottom pb-4">', '</h1>' ); ?>
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

<section class="py-5">
	<div class="container">
		<div class="bg-secondary-light p-5 rounded">
			<div class="row">
				<div class="col-lg-4 mx-auto">
					<h2 class="mb-4">How Does it Work?</h2>
					<p class="lead mb-0"></p>
				</div>

				<div class="col-lg-8 mx-auto">
					<h2 class="mb-4">Solicita tu cotización</h2>
					<p class="lead mb-0">Formulario</p>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();