<?php
/**
 * Component: Navbar
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<header>
	<nav id="component-navbar" class="navbar navbar-expand-lg py-4 bg-primary navbar-light">
		<div class="container">
			<?php
			get_template_part( 'template-parts/logo' );
			?>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary-nav',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav mx-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'primary-nav',
					'depth'           => 1,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>

			<a class="btn btn-outline-light px-4 text-decoration-none" href="#!">
				Presupuestar
			</a>
		</div>
	</nav>
</header>