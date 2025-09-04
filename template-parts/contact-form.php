<?php
/**
 * Template Part: Contact Form
 */
defined('ABSPATH') || exit;

$form_id = $args['form_id'] ?? '';

if ( ! empty( $form_id ) ) {
		echo '<div id="formulario" class="pt-5 pb-0 pb-md-5 px-4 px-md-5 rounded border bg-white">';
		echo do_shortcode( '[contact-form-7 id="' . $form_id . '"]' );
		echo '</div>';
}
