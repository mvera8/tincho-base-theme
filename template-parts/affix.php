<?php
/**
 * Template Part: Affix
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$exclude_templates = array(
	'templates/mantenimiento-page.php',
	'templates/formulario-page.php'
);

if ( is_page_template( $exclude_templates ) ) {
	return;
}

$cfg = tincho_get_settings();
?>

<div class="affix position-fixed p-0 p-sm-3">
	<div class="affix__content bg-white py-2 px-1 px-sm-3">
		<?php
		get_template_part(
			'template-parts/btn-solicita-presupuesto',
			null,
			[ 'style' => 'btn-outline-primary', ]
		);
		get_template_part(
			'template-parts/whatsapp',
			null,
			array(
				'number' => $cfg['phone'],
				'class'  => 'btn btn-secondary p-2 d-none d-md-inline-flex',
				'text'   => false,
			)
		);
		?>
	</div>
</div>