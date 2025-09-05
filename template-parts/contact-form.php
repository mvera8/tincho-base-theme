<?php
/**
 * Template Part: Contact Form
 */
defined('ABSPATH') || exit;

$form_id = isset($args['form_id']) ? (int)$args['form_id'] : 0;

if (!function_exists('cmx_guess_service_label')) {
  function cmx_guess_service_label($post_id) {
    // Normalizamos el título y buscamos palabras clave
    $t = strtolower(remove_accents(get_the_title($post_id)));
    $map = [
      'hogar'      => 'Limpieza de hogares',
      'oficina'    => 'Limpieza de oficinas / empresas',
      'empresa'    => 'Limpieza de oficinas / empresas',
      'edificio'   => 'Limpieza de edificios / condominios',
      'condominio' => 'Limpieza de edificios / condominios',
      'local'      => 'Limpieza de locales comerciales',
      'comercial'  => 'Limpieza de locales comerciales',
      'profund'    => 'Limpieza profunda (única vez)', // cubre "profunda", "profundo"
      'vidrio'     => 'Limpieza de ventanales / vidrios grandes',
      'ventanal'   => 'Limpieza de ventanales / vidrios grandes',
    ];
    foreach ($map as $needle => $label) {
      if (str_contains($t, $needle)) return $label;
    }
    return ''; // sin match: dejamos que el usuario elija
  }
}

$servicio_default = cmx_guess_service_label(get_the_ID());

if ($form_id) {
  echo '<div id="formulario" class="pt-5 pb-0 pb-md-5 px-4 px-md-5 rounded border bg-white">';
  if ($servicio_default !== '') {
    echo do_shortcode(sprintf(
      '[contact-form-7 id="%d" servicios="%s"]',
      $form_id,
      esc_attr($servicio_default)
    ));
  } else {
    echo do_shortcode(sprintf('[contact-form-7 id="%d"]', $form_id));
  }
  echo '</div>';
}
