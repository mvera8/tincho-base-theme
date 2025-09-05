<?php
/**
 * Ajuste para que el CF7 elija el servicio
 */
add_filter('shortcode_atts_wpcf7', function ($out, $pairs, $atts) {
  if (isset($atts['servicios'])) {
    $out['servicios'] = sanitize_text_field($atts['servicios']);
  }
  return $out;
}, 10, 3);
