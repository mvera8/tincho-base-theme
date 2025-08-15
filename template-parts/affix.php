<?php
/**
 * Template Part: Affix
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$cfg = tincho_get_settings();
?>

<div class="affix position-fixed w-auto p-0 p-sm-3">
	<div class="affix__content bg-white py-2 px-3">
		<?php
		get_template_part(
			'template-parts/btn-solicita-presupuesto',
			null,
			[ 'style' => 'btn-outline-primary', ]
		);
		if (!empty($cfg['phone'])) {
			echo '<a href="tel:' . esc_attr(preg_replace('/\s+/', '', $cfg['phone'])) . '" class="btn btn-secondary p-2" aria-label="Whatsapp">';
			get_template_part(
				'template-parts/icon',
				'stack',
				array(
					'icon_stack' => 'whatsapp',
				)
			);
			echo '</a>';
		}
		?>
	</div>
</div>