<?php get_header();?>

		<main class="main contenedor">
			
			<div class="grid">
				<section class="noticias">
                    <!-- esto carga el nombre de la categoria en la que estes -->
					<h3 class="titulo-seccion"><?php the_archive_title(); ?></h3>
					<?php 
                    // con esta simple linea de codigo me va mostrar las noticias que pertenezcan a esa categoria
					 	if (have_posts()) : while(have_posts()) : the_post();
					?>
					<a href="<?php the_permalink(); ?>" class="card">
						<div class="thumb">
							<!-- para cargar la imagen que en WP tiene el posts -->
							<img src="<?php the_post_thumbnail(); ?>" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo"><?php the_title(); ?></h4>
							<div class="meta">
								<p class="categoria">
									<?php 
										$categorias = get_the_category();
										$contador = 0;
										if (!empty($categorias)) {
											foreach ($categorias as $categoria) {
												echo esc_html($categoria->name);  /*esto evita que si el codigo es html nos aseguramos de que no lo ponga en la pagina*/
												$contador++;

												if ($contador < count($categorias)) {
													echo ', ';
												};
											};
										};
									?>
								</p>
								<span class="fecha"><?php echo get_the_date(); ?></span>
							</div>
							<div class="extracto">
								<?php the_excerpt(); ?>
							</div>
						</div>
					</a>
					
					<?php endwhile; else: ?> 
						<h3>No hay noticias que mostrar</h3>
					<?php endif; wp_reset_postdata(); ?>

					<div class="paginacion">
						<!-- con esta me manda a la pagina anterior -->
						<!-- asi obtenemos el link de cada una de las ultimas noticias -->				

						<?php if(get_previous_posts_link()) : ?>
							<a href="<?php echo get_previous_posts_page_link(); ?>" class="boton">Anterior</a>
						<?php else: ?>
							<button class="boton desactivado">Anterior</button>
						<?php endif; ?>

						<!-- con este obtengo los enlaces del siguiente posts con la otra que es parecida obtengo los enlaces de la siguiente pagina -->
						<!-- estoy preguntando si hay posts en la siguiente pagina -->
						<?php if(get_next_posts_link()) : ?>
							<a href="<?php echo get_next_posts_page_link(); ?>" class="boton">Siguiente</a>
						<?php else: ?>
							<button class="boton desactivado">Siguiente</button>
						<?php endif; ?>
						
					</div>
					<!-- aqui llamamos a la seccion de abajo, que esta en functions.php -->
					<?php dynamic_sidebar('after-posts'); ?>  
				</section>
				<?php get_sidebar();?>
			</div>
		</main>

<?php get_footer();?>

