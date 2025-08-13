<footer class="footer py-4">
	<div class="container">
		<div class="bg-info-light p-5 rounded">
			<div class="row">

				<div class="col-md-3 align-items-center">
					<?php
					get_template_part( 'template-parts/logo' );
					?>
					<div class="mb-3 mb-md-0 text-muted">© 2025 <?php echo esc_html( get_bloginfo( 'name' ) ); ?> - Todos los derechos reservados</div>
				</div>

				<div class="col-md-3 align-items-center">
					<h5 class="ps-3 text-info">Empresa</h5>
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

				<div class="col-md-3 align-items-center">
					<h5 class="ps-3 text-info">Servicios</h5>
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

				<div class="col-md-3">
					<ul class="col-md-4 justify-content-end list-unstyled d-flex w-100">
						<li class="ms-3">
							<a class="text-body-secondary" href="#" aria-label="Instagram">
								<?php
								get_template_part(
									'template-parts/icon',
									'stack',
									array(
										'icon_stack' => 'instagram',
										'icon_color' => 'text-dark border-info',
									)
								);
								?>
							</a>
						</li>
						<li class="ms-3">
							<a class="text-body-secondary" href="#" aria-label="Facebook">
								<?php
								get_template_part(
									'template-parts/icon',
									'stack',
									array(
										'icon_stack' => 'facebook',
										'icon_color' => 'text-dark border-info',
									)
								);
								?>
							</a>
						</li>
					</ul>
				</div>

</div>

</div>



		</div>
	
	
</footer>

<?php wp_footer(); ?>
</body>
</html>
