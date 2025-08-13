<?php
/**
 * Preload assets for better performance.
 */

function mv_preload_assets() {
	if ( is_404() ) {
		return;
	}

	$assets = [];

	if ( defined('WP_ENV') && WP_ENV === 'development' ) {
		// En entorno dev (Vite server)
		$assets[] = [
			'src'  => 'http://localhost:5173/js/main.js',
			'as'   => 'script',
			'type' => 'text/javascript',
		];
	} else {
		// En producción (build de Vite)
		$manifest_path = get_template_directory() . '/build/manifest.json';

		if ( file_exists( $manifest_path ) ) {
			$manifest = json_decode( file_get_contents( $manifest_path ), true );

			// Intentar encontrar js y css por nombre aproximado
			foreach ( $manifest as $entry ) {
				if ( isset($entry['file']) && str_ends_with($entry['file'], '.js') ) {
					$assets[] = [
						'src'  => get_template_directory_uri() . '/build/' . $entry['file'],
						'as'   => 'script',
						'type' => 'text/javascript',
					];
				}
				if ( isset($entry['file']) && str_ends_with($entry['file'], '.css') ) {
					$assets[] = [
						'src'  => get_template_directory_uri() . '/build/' . $entry['file'],
						'as'   => 'style',
						'type' => 'text/css',
					];
				}
			}
		}
	}

	// Agregar fonts si querés
	/*
	$assets[] = [
		'src'  => get_template_directory_uri() . '/fonts/OpenSans/OpenSans-Regular.woff2',
		'as'   => 'font',
		'type' => 'font/woff2',
	];
	*/

	foreach ( $assets as $asset ) {
		printf(
			"<link rel='preload' href='%s' as='%s' type='%s'%s />\n",
			esc_url($asset['src']),
			esc_attr($asset['as']),
			esc_attr($asset['type']),
			// solo para fonts y scripts externos
			(in_array($asset['as'], ['script', 'font']) ? " crossorigin" : '')
		);
	}
}
add_action( 'wp_head', 'mv_preload_assets', 0 );
