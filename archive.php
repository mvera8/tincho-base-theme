<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$q = get_queried_object();
$title = is_category() ? $q->name : $q->labels->name;

get_header();
get_template_part( 'template-parts/navbar' );
get_template_part(
  'template-parts/page',
  'title',
  ['page_title'  => $title  ]
);
?>

<section class="pt-5">
	<div class="container">
		<div class="row justify-content-center">
				
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();

						get_template_part(
							'template-parts/card',
							'servicio',
							[
								'thumbnail_size'  => 'medium',
								'show_excerpt'    => true,
								'show_date'       => true,
								'card_classes'    => 'h-100',
							]
						);
				?>
	
				<?php
			endwhile;
			?>


	<?php else : ?>

		<header class="page-header mb-4">
			<h1 class="page-title h2 m-0">No encontramos resultados</h1>
		</header>
		<p>Probá con otra categoría, etiqueta o fecha.</p>

	<?php endif; ?>






		</div>
	</div>
</section>

<?php
get_footer();