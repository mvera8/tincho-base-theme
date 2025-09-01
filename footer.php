<?php
if ( ! is_page_template( 'templates/mantenimiento-page.php' ) ) {
	?>
	<footer class="footer py-5 border-top">
		<div class="container">
			<div class="row">
				<div class="col-md-5 text-center text-md-start">
					<?php
					get_template_part( 'template-parts/logo' );
					?>
					<div class="mb-3 mb-md-0 text-muted fs-sm fs-6">© 2025 <?php echo esc_html( get_bloginfo( 'name' ) ); ?> - Todos los derechos reservados</div>
				</div>

				<div class="col-md-3 mb-4 mb-md-4 text-center text-md-start">
					<h5 class="ps-0 ps-md-3 text-muted">Empresa</h5>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'footer-nav',
							'menu_class'      => 'nav footer-nav flex-column',
							'fallback_cb'     => '',
							'depth'           => 1,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>

				<div class="col-md-3 mb-4 mb-md-4 text-center text-md-start">
					<h5 class="ps-0 ps-md-3 text-muted">Servicios</h5>
					<ul class="nav footer-nav flex-column">
					<?php
						$args = [
							'post_type'              => 'servicios',
							'post_status'            => 'publish',
							'posts_per_page'         => 10,
							'order'                  => 'ASC',
							'no_found_rows'          => true,
							'ignore_sticky_posts'    => true,
							'update_post_term_cache' => false,
							'cache_results'          => true,
							'lazy_load_term_meta'    => true,
						];

						$servicios_q = new WP_Query($args);

						if ( $servicios_q->have_posts() ) :
							while ( $servicios_q->have_posts() ) :
								$servicios_q->the_post();

								printf(
									'<li class="menu-item nav-item"><a href="%s" class="text-decoration-none nav-link">%s</a></li>',
									esc_url( get_permalink() ),
									esc_html( get_the_title() )
								);

							endwhile;
							wp_reset_postdata();
						else :
							echo '<p>No hay publicaciones recientes.</p>';
						endif;
						?>
					
						
					</ul>
				</div>

				<div class="col-md-1 text-end">
					<?php get_template_part( 'template-parts/list-redes' ); ?>
				</div>
			</div>
		</div>
	</footer>
	<?php
}

get_template_part('template-parts/affix');
wp_footer();
?>
</body>
</html>
