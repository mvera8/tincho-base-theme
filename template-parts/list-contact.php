<?php
/**
 * Template Part: List Contact
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$list_style = isset( $args['style'] ) ? $args['style'] : 'inline';
$cfg = tincho_get_settings();
?>

<ul class="list-<?php echo esc_attr( $list_style ); ?> mb-0">
	<?php
	if (!empty($cfg['phone'])) {
		echo '<li class="list-' . esc_attr( $list_style ) . '-item me-0 me-md-4 ms-2 ms-md-0"><a href="tel:' . esc_attr(preg_replace('/\s+/', '', $cfg['phone'])) . '" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Llamar al número ' . esc_html($cfg['phone']) . '">';
		get_template_part(
			'template-parts/icon',
			'stack',
			array(
				'icon_stack' => 'phone',
			)
		);
		echo '<span class="ms-0 ms-md-2">' . esc_html($cfg['phone']) . '</span></a></li>';
	}
	if (!empty($cfg['email'])) {
		echo '<li class="list-' . esc_attr( $list_style ) . '-item me-0 me-md-4 ms-2 ms-md-0"><a href="mailto:' . antispambot(esc_attr($cfg['email'])) . '" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Enviar email a ' . esc_html($cfg['email']) . '">';
		get_template_part(
			'template-parts/icon',
			'stack',
			array(
				'icon_stack' => 'email',
			)
		);
		echo '<span class="ms-0 ms-md-2">' . esc_html($cfg['email']) . '</span></a></li>';
	}
	?>
</ul>