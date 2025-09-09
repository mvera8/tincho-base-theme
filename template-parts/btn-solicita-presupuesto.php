<?php
/**
 * Template Part: Affix
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$btn_style = $args['style'] ?? 'btn-primary';
?>
<a class="btn border-0 btn-lg me-0 me-sm-2 mb-2 mb-sm-0 <?php echo esc_attr( $btn_style ); ?>" href="<?php echo esc_url( home_url( '/solicita-tu-presupuesto/') ); ?>">
	Solicitá Presupuesto
	<?php echo cleanmax_icon_selector( 'arrow-up-right' ); ?>
</a>
