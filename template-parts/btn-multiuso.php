<?php
/**
 * Template Part: Affix
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$btn_text = $args['text'] ?? '';
$btn_link = $args['link'] ?? '';
$btn_style = $args['style'] ?? 'btn-outline-light border-0';

printf(
	'<a class="btn btn-lg %s" href="%s">%s</a>',
	esc_attr( $btn_style ),
	esc_url( $btn_link ),
	esc_html( $btn_text )
);
