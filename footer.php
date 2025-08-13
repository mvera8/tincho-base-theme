
<div class="degradado p-4 pt-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-5 mx-auto text-center">
				<h2 class="display-4 fw-bold mb-5">Listo para tener un espacio máx limpio?</h2>
				<p class="mb-4 lead">Tu aliado en limpieza y mantenimiento. Descubre nuestros servicios y productos diseñados para hacer tu vida más fácil y limpia.</p>
				<a class="btn btn-primary me-2" href="#!">
					Pedir Presupuesto
					<?php echo cleanmax_icon_selector( 'arrow-right' ); ?>
				</a>
				<a class="btn btn btn-light" href="#!">¿Cómo funciona?</a>
			</div>
		</div>


		<footer class="degradado-footer px-3 py-4 rounded-3">
			<div class="row">

			
				<div class="col-md-3 align-items-center">
					<?php
					get_template_part( 'template-parts/logo' );
					?>
					<div class="mb-3 mb-md-0 text-muted">© 2025 <?php echo esc_html( get_bloginfo( 'name' ) ); ?> - Todos los derechos reservados</div>
				</div>

				<div class="col-md-3 align-items-center">
					<h5>Section</h5>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'footer-nav',
							'menu_class'      => 'nav flex-column',
							'fallback_cb'     => '',
							'depth'           => 1,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>

				<div class="col-md-3 align-items-center">
					<h5>Section</h5>
					<ul class="list-unstyled">
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
									'<li><a href="%s" class="text-decoration-none">%s</a></li>',
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
					<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
						<li class="ms-3">
							<a class="text-body-secondary" href="#" aria-label="Instagram">
								<?php echo cleanmax_icon_selector( 'instagram' ); ?>
							</a>
						</li>
						<li class="ms-3">
							<a class="text-body-secondary" href="#" aria-label="Facebook">
								<?php echo cleanmax_icon_selector( 'facebook' ); ?>
							</a>
						</li>
					</ul>
				</div>

			</div>
			
			
		</footer>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
