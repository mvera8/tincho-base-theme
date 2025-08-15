<?php
$includes = array(
  '/class-wp-bootstrap-navwalker.php',
  '/cleanup.php',
  '/comments.php',
	'/enqueue.php',
  '/excerpt.php',
	'/preload.php',
  '/svg.php',
  '/theme-options.php',
  '/theme-setup.php',
  '/cleanmax-servicios.php',
  '/cleanmax-icon-selector.php',
  '/cleanmax-image.php',
);

foreach ( $includes as $file ) {
	require_once get_template_directory() . '/functions' . $file;
}

add_filter('acf/settings/save_json', function() {
  return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function($paths) {
  $paths[] = get_stylesheet_directory() . '/acf-json';
  return $paths;
});
?>