<?php
/**
 * Template Part: Section Title
 */
defined('ABSPATH') || exit;

$section_title = $args['title'] ?? '';
$section_lead  = $args['lead']  ?? '';
$section_color = $args['color'] ?? 'default';
$section_align = $args['align']  ?? 'center col-md-4';
?>

<div class="row">
  <div class="mx-auto pb-4 text-<?php echo esc_attr( $section_align ); ?>">
    <?php if ( $section_title !== '' ) : ?>
      <h2 class="mb-2 text-capitalize text-<?php echo esc_attr( $section_color ); ?>"><?php echo esc_html( $section_title ); ?></h2>
    <?php endif; ?>

    <?php if ( $section_lead !== '' ) : ?>
      <p class="lead mb-0 text-<?php echo esc_attr( $section_color ); ?>"><?php echo esc_html( $section_lead ); ?></p>
    <?php endif; ?>
  </div>
</div>
