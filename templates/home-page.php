<?php
/**
 * Template Name: Home Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$steps = array(
	'Elegí día y hora del servicio',
	'Te asignamos un/a profesional verificado/a',
	'Disfrutá tu casa super limpia'
);

$site_title = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description' );

get_header();
get_template_part( 'template-parts/navbar' );
get_template_part( 'template-parts/home-hero' );
get_template_part( 'template-parts/choose' );
get_template_part( 'template-parts/servicios' );
get_template_part( 'template-parts/posts' );
get_template_part( 'template-parts/faqs' );
get_footer();