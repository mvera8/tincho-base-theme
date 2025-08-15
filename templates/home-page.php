<?php
/**
 * Template Name: Home Page
 *
 * @package tincho-base-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'template-parts/navbar' );
get_template_part( 'template-parts/home-slider' );
get_template_part( 'template-parts/steps' );
get_template_part( 'template-parts/servicios' );
get_template_part( 'template-parts/choose' );
get_template_part( 'template-parts/posts' );
get_template_part( 'template-parts/faqs' );
get_template_part( 'template-parts/trabaja-con-nosotros' );
get_template_part( 'template-parts/last-cta' );
get_footer();
