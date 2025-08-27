<?php
/**
 * Template Part: Page Title
 */
defined('ABSPATH') || exit;

$page_title = $args['page_title'] ?? '';
?>

<header class="py-4 bg-degradado-blue-bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<?php if ($page_title !== ''): ?>
					<h1 class="mb-1 text-capitalize text-center text-light"><?php echo wp_kses_post( $page_title ); ?></h1>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>