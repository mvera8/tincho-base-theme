<?php
/**
 * Template Part: Section Title
 */
defined('ABSPATH') || exit;

$section_title = $args['title'] ?? '';
$section_lead  = $args['lead']  ?? '';
$section_color = $args['color'] ?? 'default';
$section_align = $args['align']  ?? 'center col-12 col-sm-7 col-lg-5';
$button_link   = $args['btn_link'] ?? '';
$button_text   = $args['btn_text']  ?? '';
?>

<div class="row align-items-center justify-content-center mb-4">
  <div class="mx-auto text-<?php echo esc_attr( $section_align ); ?>">
    <?php if ( $section_title !== '' ) : ?>
      <h2 class="mb-0 text-capitalize text-<?php echo esc_attr( $section_color ); ?>"><?php echo esc_html( $section_title ); ?></h2>
    <?php endif; ?>

    <?php if ( $section_lead !== '' ) : ?>
      <p class="lead mb-0 text-<?php echo esc_attr( $section_color ); ?>"><?php echo esc_html( $section_lead ); ?></p>
    <?php endif; ?>
  </div>

  <?php if ( $button_link !== '' && $button_text !== '' ) : ?>
    <div class="col-6 text-end">
      <?php
			get_template_part(
				'template-parts/btn',
				'multiuso',
				[
					'text'  => $button_text,
					'link'  => $button_link,
					'class' => 'btn-outline-primary'
				]
			);
			?>
    </div>
  <?php endif; ?>
</div>
