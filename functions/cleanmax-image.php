<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function get_cleanmax_image( $name ) {
  return get_theme_file_uri( 'assets/images/' . $name . '.webp' );
}

function the_cleanmax_image( $name ) {
  echo get_cleanmax_image( $name ); // si la vas a usar, NO la envuelvas en esc_url() afuera
}
