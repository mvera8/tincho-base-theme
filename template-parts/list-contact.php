<?php
/**
 * Template Part: List Contact
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists('get_user_from_url') ) {
	function get_user_from_url(string $url): ?string {
		$path = parse_url($url, PHP_URL_PATH); // ej: "/cleanmax_uy"
		if (!$path) return null;
		$slug = explode('/', trim($path, '/'))[0];
		return $slug ?: null;
	}
}

$list_style = isset( $args['style'] ) ? $args['style'] : 'inline';
$cfg = tincho_get_settings();
?>

<ul class="list-<?php echo esc_attr( $list_style ); ?> mb-0">
	<?php
	echo '<li class="list-' . esc_attr($list_style) . '-item me-0 me-md-4 ms-2 ms-md-0">';
	get_template_part(
		'template-parts/whatsapp',
		null,
		array(
			'number' => $cfg['phone'],
			'class'  => 'd-inline-flex align-items-center text-decoration-none text-primary',
		)
	);
	echo '</li>';
	
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

	if (!empty($cfg['instagram'])) {
		echo '<li class="list-' . esc_attr( $list_style ) . '-item me-0 me-md-4 ms-2 ms-md-0"><a href="' . esc_html($cfg['instagram']) . '" target="_blank" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Instagram">';
		get_template_part(
			'template-parts/icon',
			'stack',
			array(
				'icon_stack' => 'instagram',
			)
		);
		echo '<span class="ms-0 ms-md-2">' . esc_html( get_user_from_url($cfg['instagram']) ) . '</span></a></li>';
	}
	?>
</ul>