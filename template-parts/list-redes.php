<?php
/**
 * Template Part: List Redes
 */

 defined( 'ABSPATH' ) || exit;
 
 if ( ! function_exists('get_user_from_url') ) {
	 function get_user_from_url(string $url): ?string {
		 $path = parse_url($url, PHP_URL_PATH); // ej: "/cleanmax_uy"
		 if (!$path) return null;
		 $slug = explode('/', trim($path, '/'))[0];
		 return $slug ?: null;
	 }
 }
 
 $list_style = isset( $args['style'] ) ? $args['style'] : 'inline';
 $list_name  = isset( $args['name'] )  ? (bool)$args['name'] : false;
 $cfg = tincho_get_settings();
 ?>
 
 <ul class="list-<?php echo esc_attr( $list_style ); ?> mb-0">
	 <?php
	 if (!empty($cfg['facebook'])) {
		 echo '<li class="list-' . esc_attr( $list_style ) . '-item me-3"><a href="' . esc_url($cfg['facebook']) . '" target="_blank" rel="noopener" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Facebook">';
		 get_template_part('template-parts/icon','stack',['icon_stack'=>'facebook']);

		 if ($list_name) {
			$user = get_user_from_url($cfg['facebook']);
			if ($user) {
				echo '<span class="ms-1">/' . esc_html($user) . '</span>';
			}
		}

		 echo '<span class="visually-hidden">Facebook</span></a></li>'; // <- cerramos el span
	 }
 
	 if (!empty($cfg['instagram'])) {
		 echo '<li class="list-' . esc_attr( $list_style ) . '-item me-3"><a href="' . esc_url($cfg['instagram']) . '" target="_blank" rel="noopener" class="d-inline-flex align-items-center text-decoration-none text-primary" aria-label="Instagram">';
		 get_template_part('template-parts/icon','stack',['icon_stack'=>'instagram']);
 
		 if ($list_name) {
			 $user = get_user_from_url($cfg['instagram']);
			 if ($user) {
				 echo '<span class="ms-1">@' . esc_html($user) . '</span>';
			 }
		 }
 
		 echo '<span class="visually-hidden">Instagram</span></a></li>';
	 }
	 ?>
 </ul>
 