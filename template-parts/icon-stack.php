<?php
/**
 * Template Part: Icon Stack (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$size = isset( $args['size'] ) ? implode( ' ', (array) $args['size'] ) : '';
$icon_stack = isset( $args['icon_stack'] ) ? $args['icon_stack'] : '';
$icon_color = isset( $args['icon_color'] ) ? implode( ' ', (array) $args['icon_color'] ) : '';

printf(
	'<div class="icon-stack icon-stack-%s mb-3 d-inline-flex text-primary border border-2 %s">%s</div>',
	esc_attr( $size ),
	esc_attr( $icon_color ),
	cleanmax_icon_selector( $icon_stack )
);
