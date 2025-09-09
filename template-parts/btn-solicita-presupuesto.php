<?php
/**
 * Template Part: Affix
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$btn_style = $args['style'] ?? 'btn-primary';
$is_servicio = is_singular( 'servicios' );
?>

<a class="btn border-0 btn-lg me-0 me-sm-2 mb-2 mb-sm-0 <?php echo esc_attr( $btn_style ); ?>" href="<?php echo $is_servicio ? '#formulario' : esc_url( home_url( '/solicita-tu-presupuesto/') ); ?>">
	Solicitá Presupuesto
	<?php echo cleanmax_icon_selector( $is_servicio ? 'arrow-top' : 'arrow-up-right' ); ?>
</a>
