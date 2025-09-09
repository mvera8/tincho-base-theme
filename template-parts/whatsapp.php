<?php
/**
 * Template Part: Whatsapp
 */
defined('ABSPATH') || exit;

$number = isset( $args['number'] ) ? $args['number'] : '';
$class = isset( $args['class'] ) ? $args['class'] : '';
$text = isset( $args['text'] ) ? $args['text'] : true;

// Mensaje predefinido
$msg = 'Hola! Quiero información sobre ';

if ( is_singular( 'servicios' ) ) {
	$msg .= 'la limpieza de ' . get_the_title();
} else {
	$msg .= 'el servicio';
}

if (!empty( $number )) {
	// Sanitizar: solo dígitos
	$digits = preg_replace('/\D+/', '', (string) $number );

	// (Opcional) Si guardás números locales (ej: 099123456), agregá el código de país por defecto.
	// Uruguay = 598. Si ya viene con código, no tocamos nada.
	if (strlen($digits) <= 9) {
		$digits = '598' . ltrim($digits, '0'); // quita 0 inicial y antepone 598
	}

	// Link oficial de WhatsApp en formato internacional sin "+"
	$wa_url = 'https://wa.me/' . $digits . '?text=' . rawurlencode($msg);

	echo '<a href="' . esc_url($wa_url) . '" target="_blank" rel="noopener" class="' . esc_attr( $class ) . '" aria-label="Enviar WhatsApp al número ' . esc_attr( $number ) . '">';
	get_template_part(
		'template-parts/icon',
		'stack',
		array(
			'icon_stack' => 'whatsapp',
		)
	);
	if ( $text ) {
		echo '<span class="ms-0 ms-md-2">' . esc_html( $number ) . '</span>';
	}
	echo '</a>';
}