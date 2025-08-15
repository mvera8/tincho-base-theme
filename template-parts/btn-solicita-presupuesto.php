<?php
/**
 * Template Part: Affix
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$btn_style = $args['style'] ?? 'btn-primary';
?>

<a class="btn btn-lg border-0 me-2 <?php echo esc_attr( $btn_style ); ?>" href="#!">
	Solicitá Presupuesto
	<?php echo cleanmax_icon_selector( 'arrow-up-right' ); ?>
</a>
