<?php
/**
 * Shortcode: [cleanmax_card title="..." text="..."]Contenido opcional[/cleanmax_card]
 */
add_shortcode('cleanmax_card', function ($atts, $content = null) {
  $atts = shortcode_atts([
    'title'        => '',
    'text'         => '',
    'icon'         => '',
  ], $atts, 'cleanmax_card');

  $title  = trim($atts['title']);
  $icon  = strtolower($atts['icon']);
  // Si no pasaron text en el atributo, usamos el contenido del shortcode
  $text   = $atts['text'] !== '' ? $atts['text'] : $content;

  // Sanitización
  $title_safe = esc_html($title);
  // Permitimos HTML seguro en el texto y aplicamos párrafos automáticos
  $text_safe  = $text !== null ? wpautop(wp_kses_post($text)) : '';

  ob_start(); ?>
    <div class="card h-100 w-100 border-0">
      <div class="card-body d-flex flex-column p-0">
        <?php
        if ( isset( $icon ) ) {
          echo cleanmax_icon_selector( $icon );
        }
        ?>
        <h3 class="card-title h5 mb-2 my-4"><?php echo $title_safe; ?></h3>
        <?php echo $text_safe; ?>
      </div>
    </div>
  <?php
  return ob_get_clean();
});
