<?php
/**
 * Template Part: List Contact
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$cfg = tincho_get_settings();
?>

<div class="row text-center mt-5">
	<?php
	if (!empty($cfg['puntaje'])) {
		echo '<div class="col-5"><h2 class="h2 mb-0">⭐ ' . esc_html($cfg['puntaje']) . '</h2><small>Puntaje</small></div>';
	}
	if (!empty($cfg['reviews'])) {
		echo '<div class="col-5"><h2 class="h2 mb-0">💬 ' . esc_html($cfg['reviews']) . '</h2><small>Reseñas</small></div>';
	}
	?>
</div>