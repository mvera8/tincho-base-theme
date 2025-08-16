<?php
/**
 * Component: Navbar Top
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$cfg = tincho_get_settings();
?>

<section class="pt-2 pb-1 bg-secondary">
	<div class="container">
		<div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
			<ul class="list-inline mb-0">
				<?php
				if (!empty($cfg['phone'])) {
					echo '<li class="list-inline-item me-4"><a href="tel:' . esc_attr(preg_replace('/\s+/', '', $cfg['phone'])) . '" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Llamar al número ' . esc_html($cfg['phone']) . '">';
					get_template_part(
						'template-parts/icon',
						'stack',
						array(
							'icon_stack' => 'phone',
						)
					);
					echo '<span class="ms-2">' . esc_html($cfg['phone']) . '</span></a></li>';
				}
				if (!empty($cfg['email'])) {
					echo '<li class="list-inline-item me-4"><a href="mailto:' . antispambot(esc_attr($cfg['email'])) . '" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Enviar email a ' . esc_html($cfg['email']) . '">';
					get_template_part(
						'template-parts/icon',
						'stack',
						array(
							'icon_stack' => 'email',
						)
					);
					echo '<span class="ms-2">' . esc_html($cfg['email']) . '</span></a></li>';
				}
				?>
			</ul>

			<ul class="list-inline mb-0">
				<?php
				if (!empty($cfg['facebook'])) {
					echo '<li class="list-inline-item me-3"><a href="' . esc_url($cfg['facebook']) . '" target="_blank" rel="noopener" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Facebook">';
					get_template_part(
						'template-parts/icon',
						'stack',
						array(
							'icon_stack' => 'facebook',
						)
					);
					echo '<span class="visually-hidden">Facebook</a></li>';
				}
				
				if (!empty($cfg['instagram'])) {
					echo '<li class="list-inline-item me-3"><a href="' . esc_url($cfg['instagram']) . '" target="_blank" rel="noopener" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Instagram">';
					get_template_part(
						'template-parts/icon',
						'stack',
						array(
							'icon_stack' => 'instagram',
						)
					);
					echo '<span class="visually-hidden">Instagram</span></a></li>';
				}
				?>
			</ul>
		</div>
	</div>
</section>