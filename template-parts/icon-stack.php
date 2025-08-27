<?php
/**
 * Template Part: Icon Stack (Bootstrap 5)
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$size = isset( $args['size'] ) ? implode( ' ', (array) $args['size'] ) : '';
$icon_stack = isset( $args['icon_stack'] ) ? $args['icon_stack'] : '';
$icon_color = isset( $args['icon_color'] ) ?  $args['icon_color'] : 'bg-transparent text-primary';
$icon_margin = isset( $args['icon_margin'] ) ? $args['icon_margin'] : '';

printf(
	'<div class="icon-stack icon-stack-%s d-inline-flex %s %s">%s</div>',
	esc_attr( $size ),
	esc_attr( $icon_color ),
	esc_attr( $icon_margin ),
	cleanmax_icon_selector( $icon_stack )
);
