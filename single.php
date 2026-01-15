<?php get_header();?>
		<main class="main contenedor">
			
			<div class="grid">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  <article class="articulo">
					<div class="thumb">
						<?php the_post_thumbnail(); ?>
					</div>
					<h1 class="titulo"><?php the_title(); ?></h1>
					<div class="meta">
						<div class="categorias">
                            <?php the_category(); ?>
						</div>
						<p class="fecha"><?php echo get_the_date(); ?></p>
					</div>
					<div class="texto">
                        <?php the_content(); ?>
					</div>
				  </article>
                <?php endwhile; else: ?>
                    <h3>No hay ningún articulo</h3>
                
                <?php endif; ?>
				
                <?php get_sidebar();?>
			</div>
		</main>

<?php get_footer();?>
