<?php
/**
 * Template Part: List Redes
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$list_style = isset( $args['style'] ) ? $args['style'] : 'inline';
$cfg = tincho_get_settings();
?>

<ul class="list-<?php echo esc_attr( $list_style ); ?> mb-0">
	<?php
	if (!empty($cfg['facebook'])) {
		echo '<li class="list-' . esc_attr( $list_style ) . '-item me-3"><a href="' . esc_url($cfg['facebook']) . '" target="_blank" rel="noopener" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Facebook">';
		get_template_part(
			'template-parts/icon',
			'stack',
			array(
				'icon_stack' => 'facebook',
			)
		);
		echo '<span class="visually-hidden">Facebook</a></li>';
	}
	
	if (!empty($cfg['instagram'])) {
		echo '<li class="list-' . esc_attr( $list_style ) . '-item me-3"><a href="' . esc_url($cfg['instagram']) . '" target="_blank" rel="noopener" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Instagram">';
		get_template_part(
			'template-parts/icon',
			'stack',
			array(
				'icon_stack' => 'instagram',
			)
		);
		echo '<span class="visually-hidden">Instagram</span></a></li>';
	}
	?>
</ul>