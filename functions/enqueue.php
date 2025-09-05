<?php
add_action('wp_enqueue_scripts', function () {
  if (defined('WP_ENV') && WP_ENV === 'development') {
    add_action('wp_print_scripts', function () {
      // echo '<script type="module" src="http://localhost:5173/js/@vite/client"></script>';
      echo '<script type="module" src="http://localhost:5173/js/main.js"></script>';
    });
  } else {
    $manifest_path = get_template_directory() . '/build/manifest.json';

    if (!file_exists($manifest_path)) {
      error_log('[enqueue] No se encontró manifest.json');
      return;
    }

    $manifest = json_decode(file_get_contents($manifest_path), true);

    // Buscar las claves correctas sin importar el prefijo
    $css_key = array_filter(array_keys($manifest), fn($k) => str_ends_with($k, 'css/style.scss'));
    $js_key  = array_filter(array_keys($manifest), fn($k) => str_ends_with($k, 'js/main.js'));

    if (!$css_key || !$js_key) {
      error_log('[enqueue] No se encontraron entradas js/main.js o css/style.scss en el manifest');
      return;
    }

    $css_key = array_shift($css_key);
    $js_key  = array_shift($js_key);

    $css_file = $manifest[$css_key]['file'] ?? null;
    $js_file  = $manifest[$js_key]['file'] ?? null;

    if (!$css_file || !$js_file) {
      error_log('[enqueue] Faltan archivos en el manifest');
      return;
    }

    $base_uri = get_template_directory_uri() . '/build';

    wp_enqueue_style('tincho-style', "$base_uri/$css_file", [], null);
    wp_enqueue_script('tincho-script', "$base_uri/$js_file", [], null, true);
  }  
});

add_filter('script_loader_tag', function($tag, $handle, $src) {
  if ($handle === 'tincho-script' || $handle === 'tincho-dev') {
    return sprintf('<script type="module" src="%s" id="%s-js"></script>', esc_url($src), esc_attr($handle));
  }
  return $tag;
}, 10, 3);
