<?php
/**
 * Template Part: Section Title
 */
defined('ABSPATH') || exit;

$section_title = $args['section_title'] ?? '';
$section_lead  = $args['section_lead']  ?? '';
?>

<div class="row">
  <div class="col-md-4 mx-auto text-center">
    <?php if ( $section_title !== '' ) : ?>
      <h2 class="mb-5 text-capitalize"><?php echo esc_html( $section_title ); ?></h2>
    <?php endif; ?>

    <?php if ( $section_lead !== '' ) : ?>
      <p class="lead"><?php echo esc_html( $section_lead ); ?></p>
    <?php endif; ?>
  </div>
</div>
