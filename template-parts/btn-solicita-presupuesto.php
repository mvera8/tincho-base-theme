<?php
/**
 * Template Part: Affix
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$btn_style = $args['style'] ?? 'btn-primary';
$is_servicio = is_singular( 'servicios' );
?>

<a class="btn border-0 me-0 me-sm-2 px-1 px-sm-4 <?php echo wp_is_mobile() ? '' : 'btn-lg'; ?> <?php echo esc_attr( $btn_style ); ?>" href="<?php echo $is_servicio ? '#formulario' : esc_url( home_url( '/solicita-tu-presupuesto/') ); ?>">
	Solicitá Presupuesto
	<?php echo cleanmax_icon_selector( $is_servicio ? 'arrow-bottom' : 'arrow-up-right' ); ?>
</a>
