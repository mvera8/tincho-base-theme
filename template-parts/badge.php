<?php
/**
 * Template Part: Badge (Bootstrap 5)
 * Variables vía get_template_part(..., ..., $args)
 *
 * Args esperados:
 * - text (string)
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$badge_text = isset($args['text']) ? esc_html($args['text']) : '';

if ( ! empty( $badge_text ) ) :
	printf(
		'<span class="badge fw-light rounded-pill bg-secondary-light text-uppercase mb-2">%s</span>',
		esc_html( $badge_text )
	);
endif;
