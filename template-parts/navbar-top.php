<?php
/**
 * Component: Navbar Top
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="pt-2 pb-1 bg-secondary">
	<div class="container">
		<div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
			<?php
			get_template_part( 'template-parts/list-contact' );
			?>
			<div class="d-none d-md-inline-block">
				<?php
				get_template_part( 'template-parts/list-redes' );
				?>
			</div>
		</div>
	</div>
</section>