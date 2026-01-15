<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/normalize.css')?>" />
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/estilos.css')?>" />
		
		<!-- para single.php hay que cargar los estilos de esta forma, para meter codigo html entre medias del php hay que cerrarlo y abrirlo luego otra vez -->
		<?php if(is_single() || is_page() ) { ?>
			<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/single.css')?>" />
		<?php } ?>


		<script src="<?php echo get_theme_file_uri('main.js')?>" defer></script>
		
		<title>
			
			<?php if(is_home()) { 
				echo get_bloginfo('name');
			} else if (is_single()) {
				echo the_title();
			} else {
				echo get_bloginfo('name');
			}
			
			?>

		</title>
        <?php wp_head(); ?>
	</head>
	<body>
		<header class="header">
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo get_theme_file_uri('assets/logo.svg')?>" alt="Logo de Vision Blog" />
				</a>
				<button class="btn-menu" id="btn-menu">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						width="16"
						height="16"
						fill="currentColor"
						class="icono"
						viewBox="0 0 16 16"
					>
						<path
							fill-rule="evenodd"
							d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"
						/>
					</svg>
					<span>Categorías</span>
				</button>
			</div>

			<div class="contenedor-navbar" id="contenedor-navbar">
                <?php wp_nav_menu(array(
                    'container' => false,
                    'menu_class' => 'navbar',  /*asi le doy estilos con la clase navbar*/ 
                    'theme_location' => 'menu-header'
                )) ?>

            <!-- <ul class="navbar">
					<li><a href="#">Actualidad</a></li>
					<li><a href="#">Internacional</a></li>
					<li><a href="#">Economía</a></li>
					<li><a href="#">Cultura</a></li>
					<li><a href="#">Salud</a></li>
					<li><a href="#">Ciencia</a></li>
					<li><a href="#">Deportes</a></li>
					<li><a href="#">Entretenimiento</a></li>
					<li><a href="#">Medio Ambiente</a></li>
					<li><a href="#">Educación</a></li>
				</ul> -->
			</div>
		</header>