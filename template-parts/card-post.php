<?php
/**
 * Template Part: Card Post (Bootstrap 5)
 * Variables vía get_template_part(..., ..., $args)
 *
 * Args esperados:
 * - thumbnail_size (string) por ej. 'medium'
 * - show_excerpt (bool)
 * - excerpt_length (int)
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$defaults = [
  'thumbnail_size' => 'medium',
  'show_excerpt'   => true,
  'excerpt_length' => 20,
  'col_classes'    => 'col-lg-4 col-md-6',
];

$args = isset($args) ? wp_parse_args($args, $defaults) : $defaults;
?>

<div class="<?php echo esc_attr( $args['col_classes'] ); ?>">
  <div class="card card-blog border-0">
    <div class="position-relative">
      <a class="d-block" href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( $args['thumbnail_size'], [
            'class' => 'card-img-top img-fluid shadow rounded',
            'alt'   => the_title_attribute(['echo' => false]),
          ] ); ?>
        </a>
      <?php endif; ?>
      </a>
    </div>
    <div class="card-body px-4 pt-3">
      <h5 class="card-title mb-2">
        <a class="text-decoration-none text-dark" href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h5>
      <?php if ( $args['show_excerpt'] ) : ?>
        <p class="card-text">
          <?php echo esc_html( wp_trim_words( get_the_excerpt(), (int) $args['excerpt_length'] ) ); ?>
        </p>
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>"class="btn btn-outline-dark w-100">Leer Más</a>
    </div>
  </div>
</div>
