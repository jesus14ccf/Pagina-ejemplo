<?php get_header();?>

		<main class="main contenedor">
			<section class="noticias-principales">
				<?php 
					 $noticia_principal = new WP_Query(array(
						
					 ))

				?>
				<a href="single.html" class="principal">
					<div class="thumb">
						<img src="./assets/img/0.png" alt="" />
					</div>
					<div class="info">
						<h4 class="titulo">Space X lanza satélite comercial desde Falcon Heavy</h4>
						<div class="meta">
							<p class="categoria">Actualidad</p>
							<span class="fecha">1 de Enero de 2025</span>
						</div>
						<p class="extracto">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos nostrum
							earum, natus doloremque commodi necessitatibus vitae aperiam alias. Iure!
						</p>
					</div>
				</a>
				<div class="noticias-destacadas">
					<a href="single.html" class="card">
						<div class="thumb">
							<img src="./assets/img/1.png" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
							<div class="meta">
								<p class="categoria">Actualidad</p>
								<span class="fecha">1 de Enero de 2024</span>
							</div>
						</div>
					</a>
					<a href="single.html" class="card">
						<div class="thumb">
							<img src="./assets/img/2.png" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
							<div class="meta">
								<p class="categoria">Actualidad</p>
								<span class="fecha">1 de Enero de 2024</span>
							</div>
						</div>
					</a>
					<a href="single.html" class="card">
						<div class="thumb">
							<img src="./assets/img/3.png" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
							<div class="meta">
								<p class="categoria">Actualidad</p>
								<span class="fecha">1 de Enero de 2024</span>
							</div>
						</div>
					</a>
					<a href="single.html" class="card">
						<div class="thumb">
							<img src="./assets/img/4.png" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
							<div class="meta">
								<p class="categoria">Actualidad</p>
								<span class="fecha">1 de Enero de 2024</span>
							</div>
						</div>
					</a>
				</div>
			</section>

			<div class="grid">
				<section class="noticias">
					<h3 class="titulo-seccion">Últimas noticias</h3>
					<a href="single.html" class="card">
						<div class="thumb">
							<img src="./assets/img/5.png" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo">Space X lanza satélite comercial desde Falcon Heavy</h4>
							<div class="meta">
								<p class="categoria">Actualidad</p>
								<span class="fecha">1 de Enero de 2024</span>
							</div>
							<p class="extracto">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed dolor quis leo
								varius fermentum.
							</p>
						</div>
					</a>
					<a href="single.html" class="card">
						<div class="thumb">
							<img src="./assets/img/6.png" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo">Space X lanza satélite comercial desde Falcon Heavy</h4>
							<div class="meta">
								<p class="categoria">Actualidad</p>
								<span class="fecha">1 de Enero de 2024</span>
							</div>
							<p class="extracto">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed dolor quis leo
								varius fermentum.
							</p>
						</div>
					</a>
					<a href="single.html" class="card">
						<div class="thumb">
							<img src="./assets/img/7.png" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo">Space X lanza satélite comercial desde Falcon Heavy</h4>
							<div class="meta">
								<p class="categoria">Actualidad</p>
								<span class="fecha">1 de Enero de 2024</span>
							</div>
							<p class="extracto">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed dolor quis leo
								varius fermentum.
							</p>
						</div>
					</a>
					<a href="single.html" class="card">
						<div class="thumb">
							<img src="./assets/img/8.png" alt="" />
						</div>
						<div class="info">
							<h4 class="titulo">Space X lanza satélite comercial desde Falcon Heavy</h4>
							<div class="meta">
								<p class="categoria">Actualidad</p>
								<span class="fecha">1 de Enero de 2024</span>
							</div>
							<p class="extracto">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed dolor quis leo
								varius fermentum.
							</p>
						</div>
					</a>

					<div class="paginacion">
						<a href="#" class="boton desactivado">Anterior</a>
						<a href="#" class="boton">Siguiente</a>
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


