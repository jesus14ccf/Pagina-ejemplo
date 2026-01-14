<?php get_header();?>

		<main class="main contenedor">
			
			<?php  
				#tenemos que obtener el numero de page, de la pagina vamos
				# con el if nos aseguramos de que en caso de que no estemos en ninguna pagina siguiente sino en inicio 
				#por defecto $page va a tener el valor de 1
				$page = (get_query_var('paged') ? get_query_var('paged') : 1);
				if ($page === 1) :  #si estoy en la pagina 1 quiero mostrar section pues cierro este if debajo de section
			?>

			<section class="noticias-principales">
				<?php /*vamos a tener un array que contiene todas las noticias con esos filtros (noticia-principal) solo va tener 1 en este caso*/
					 $noticia_principal = new WP_Query(array(
						'tag' => 'noticia-principal',  /*obten todos los que tenga la etiqueta noticia principal*/ 
						'posts_per_page' => 1      /*obeten solo un articulo una noticia principal*/
					 ));
					/*Si noticia principal tiene posts entonces pasa al while, si tiene posts entonces noticia-principal le pasamos el post*/
					 if ($noticia_principal->have_posts()) : while($noticia_principal->have_posts()) : $noticia_principal->the_post();
				?>
				<a href="<?php the_permalink(); ?>" class="principal">
					<div class="thumb">
						<img src="<?php the_post_thumbnail(); ?>" alt="" />
					</div>
					<div class="info">
						<h4 class="titulo"><?php the_title(); ?></h4>
						<div class="meta">
							<p class="categoria">
								<?php 
									$categorias = get_the_category();  /*asi vamos a obtener un array de todas las categorias*/
									echo $categorias[0]->name; /*imprimimos en pantalla el nombre de la primera categoria*/
								?>
							</p>
							<span class="fecha">
								<?php 
									the_date();
								?>
							</span>
						</div>
						<div class="extracto">
							<?php
								the_excerpt(); 
							?>
						</div>
					</div>
				</a>
				<!-- en la etiqueta a utilice el loop de antes pues luego de esa etiqueta lo cierro -->
				<?php endwhile; else: ?> 
					<h3>No hay noticias que mostrar</h3>
				<?php endif; wp_reset_postdata(); ?>

				<div class="noticias-destacadas">

					<?php /*vamos a tener un array que contiene todas las noticias con esos filtros (noticia-principal) solo va tener 1 en este caso*/
						$noticias_destacadas = new WP_Query(array(
							'tag' => 'noticias-destacadas',  /*obten todos los que tenga la etiqueta noticia principal*/ 
							'posts_per_page' => 4      /*obeten solo un articulo una noticia principal*/
					 	));
					/*Si noticia principal tiene posts entonces pasa al while, si tiene posts entonces noticia-principal le pasamos el post*/
					 	if ($noticias_destacadas->have_posts()) : while($noticias_destacadas->have_posts()) : $noticias_destacadas->the_post();
					?>
					
					<a href="<?php the_permalink(); ?>" class="card">
						<div class="thumb">
							<img src="<?php the_post_thumbnail(); ?>" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo"><?php the_title(); ?> </h4>
							<div class="meta">
								<p class="categoria">
									<?php 
										$categorias = get_the_category();
										echo $categorias[0]->name;
									?>
								</p>
								<span class="fecha"><?php echo get_the_date(); ?></span> 
							</div>
						</div>
					</a>
					
					<?php endwhile; else: ?> 
						<h3>No hay noticias que mostrar</h3>
					<?php endif; wp_reset_postdata(); ?>
				
				</div>
			</section>

			<?php endif; ?>

			<div class="grid">
				<section class="noticias">
					<h3 class="titulo-seccion">Últimas noticias</h3>
					<?php 
						/*con esto obtenemos el id de las noticias destacadas para guardarlas en un array, nos traemos el slug de noticas destacadas y el posts_tag etiqueta */
						$noticias_destacadas_tag_info = get_term_by('slug','noticias-destacadas','post_tag');
						$noticia_principal_tag_info = get_term_by('slug','noticia-principal','post_tag');
						/*si existe coge la informacion de la variable que es term_id y si no guarda null*/	
						$noticias_destacadas_id = ($noticias_destacadas_tag_info ? $noticias_destacadas_tag_info->term_id : null);
						$noticia_principal_id = ($noticia_principal_tag_info ? $noticia_principal_tag_info->term_id : null); 
						

						$ultimas_noticias = new WP_Query(array(
							'tag__not_in' => array($noticias_destacadas_id, $noticia_principal_id),
							'posts_per_page' => 4,
							'paged' => $paged    
					 	));
					/*Si noticia principal tiene posts entonces pasa al while, si tiene posts entonces noticia-principal le pasamos el post*/
					 	if ($ultimas_noticias->have_posts()) : while($ultimas_noticias->have_posts()) : $ultimas_noticias->the_post();
					?>
					<a href="<?php the_permalink(); ?>" class="card">
						<div class="thumb">
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

						<?php if(get_previous_posts_link(null, $ultimas_noticias->max_num_pages)) : ?>
							<a href="<?php echo get_previous_posts_page_link(null, $ultimas_noticias->max_num_pages); ?>" class="boton">Anterior</a>
						<?php else: ?>
							<button class="boton desactivado">Anterior</button>
						<?php endif; ?>

						<!-- con este obtengo los enlaces del siguiente posts con la otra que es parecida obtengo los enlaces de la siguiente pagina -->
						<!-- estoy preguntando si hay posts en la siguiente pagina -->
						<?php if(get_next_posts_link(null, $ultimas_noticias->max_num_pages)) : ?>
							<a href="<?php echo get_next_posts_page_link(null, $ultimas_noticias->max_num_pages); ?>" class="boton">Siguiente</a>
						<?php else: ?>
							<button class="boton desactivado">Siguiente</button>
						<?php endif; ?>
						
					</div>
					<div class="anuncios">
						<a href="#" class="anuncio">
							<img src="./assets/img/banner.png" alt="" />
							<p class="leyenda">Publicidad</p>
						</a>
					</div>
				</section>
				<?php get_sidebar();?>
			</div>
		</main>

<?php get_footer();?>


