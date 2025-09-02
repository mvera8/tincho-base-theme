<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function get_cleanmax_image( $name, $ext = 'webp' ) {
  return get_theme_file_uri( 'assets/images/' . $name . '.' . $ext );
}

function the_cleanmax_image( $name, $ext = 'webp' ) {
  echo get_cleanmax_image( $name, $ext ); // si la vas a usar, NO la envuelvas en esc_url() afuera
}
