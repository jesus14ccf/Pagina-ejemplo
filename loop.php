	<!-- LOOP DE WORDPRESS -->
	 <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
	 <!-- MI POST -->
	 <?php endwhile; else: ?>
	 <!--- NO HAY POSTS -->
	 <?php endif; wp_reset_postdata(); ?>
	 <!--- FIN DEL LOOP THE WORDPRESS -->
	 