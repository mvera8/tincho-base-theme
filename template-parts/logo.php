<?php
/**
 * Template Part: Logo (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
	the_custom_logo();
} else {
	?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
			<?php bloginfo( 'name' ); ?>
	</a>
	<?php
}