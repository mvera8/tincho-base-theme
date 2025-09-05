<?php
/**
 * Preload assets for better performance.
 */
function mv_preload_assets() {
  if ( is_404() ) return;

  $assets = [];
  $theme_dir = wp_normalize_path( get_template_directory() );
  $theme_uri = get_template_directory_uri();

  // --- JS/CSS desde manifest (como ya tenías) ---
  if ( ! ( defined('WP_ENV') && WP_ENV === 'development' ) ) {
    $manifest_path = $theme_dir . '/build/manifest.json';
    if ( file_exists( $manifest_path ) ) {
      $manifest = json_decode( file_get_contents( $manifest_path ), true );
      foreach ( $manifest as $entry ) {
        if ( isset($entry['file']) && str_ends_with($entry['file'], '.js') ) {
          $assets[] = [
            'src'  => $theme_uri . '/build/' . $entry['file'],
            'as'   => 'script',
            'type' => 'text/javascript',
          ];
        }
        if ( isset($entry['file']) && str_ends_with($entry['file'], '.css') ) {
          $assets[] = [
            'src'  => $theme_uri . '/build/' . $entry['file'],
            'as'   => 'style',
            'type' => 'text/css',
          ];
        }
      }
    }
  } else {
    // Entorno dev (Vite)
    $assets[] = [
      'src'  => 'http://localhost:5173/js/main.js',
      'as'   => 'script',
      'type' => 'text/javascript',
    ];
  }

  // --- FONTS con hash: Montserrat-Light y Poppins-Bold (WOFF2) ---
  $font_bases = ['Montserrat-Light', 'Poppins-Bold'];
  foreach ($font_bases as $base) {
    $matches = glob($theme_dir . "/build/assets/{$base}-*.woff2");
    if ($matches) {
      // Tomamos el primero que matchee (suele haber uno por peso/estilo)
      $abs_path = wp_normalize_path($matches[0]);
      $rel_path = ltrim(str_replace($theme_dir, '', $abs_path), '/'); // e.g. build/assets/Poppins-Bold-xyz.woff2
      $assets[] = [
        'src'  => trailingslashit($theme_uri) . $rel_path,
        'as'   => 'font',
        'type' => 'font/woff2',
      ];
    }
  }

  // --- Output <link rel="preload"> ---
  foreach ( $assets as $asset ) {
    printf(
      "<link rel='preload' href='%s' as='%s'%s%s />\n",
      esc_url($asset['src']),
      esc_attr($asset['as']),
      isset($asset['type']) ? " type='" . esc_attr($asset['type']) . "'" : '',
      in_array($asset['as'], ['script','font'], true) ? ' crossorigin' : ''
    );
  }
}
add_action( 'wp_head', 'mv_preload_assets', 0 );
