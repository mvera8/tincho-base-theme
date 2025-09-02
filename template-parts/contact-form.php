<?php
/**
 * Template Part: Contact Form
 */
defined('ABSPATH') || exit;

$form_id = $args['form_id'] ?? '';

if ( ! empty( $form_id ) ) {
		echo '<div id="formulario" class="p-5 rounded border bg-white">';
		echo do_shortcode( '[contact-form-7 id="' . $form_id . '"]' );
		echo '</div>';
}
