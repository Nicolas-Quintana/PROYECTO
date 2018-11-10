<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Red Social</title>
	<link rel="stylesheet" href="CSS/style2.css">
	<script type="text/javascript" src="js/views.js"></script>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href="_profile.php"><span class="menu-avatar"><img class="menu-avatar-img" src ='../img/perfil/5bddd85bc33b4.jpg'></span></a>
				</li>
				<li>
					<form action="#">
						<input type="text" placeholder="Buscar">
						<button>
							<img src="img/glasses.png" height="10" alt="Buscar">
						</button>
					</form>
				</li>
				<li class="menu_option option"><a href="_perfil.php">Datos</a></li>
				<li class="option"><a href="_profile.php">Perfil</a></li>
				<li class="option"><a href="_perfil.php">Configuración</a></li>
			</ul>
		</nav>
	</header>
	<div class="container">

		<article>


			<section class="writer">
				<textarea placeholder="¿Qué piensas?"></textarea>
				<div class="buttons-writer">
					<button class="default">Frases célebres</button>
					<button class="general">Publicar</button>
				</div>
			</section>

			<?php 
				for ($i=0; $i < 10; $i++) { 
			?>
			<section>
				<div class="avatar">
					<div class="background_image">
						<img src="img/avatar64.jpg" alt="">
					</div>
					<div class="action">
						<h2><a href="_profile.php">Benito Camelo Parado Al Fondo</a></h2>
						<h3> <a href="#">Hace dos horas</a></h3>
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="status">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur exercitationem sit dolores recusandae, reprehenderit atque eos quod excepturi sunt mollitia maxime corrupti, fuga modi vel non architecto quos perspiciatis aperiam? iciatis aperiam
					</p>
				</div>
				<div class="like_tools">
					<a href="#" class="like_button">Me gusta</a>
					<a href="#" class="dislike_button">No me gusta</a>
					<a href="#openmodal" class="comments_button">25 Comentarios</a>
				</div>
			</section>
			<?php
			}
			?>

		</article>


		<aside>

			<div class="user_information">
				<div class="avatar">
					<span class="aside-avatar" style="background:url(img/avatar100.jpg) center;"></span>
				</div>
				<div class="information">
					<h1 id="user_nick">PerroDelMal</h1>
					<h1 id="user_name">Benito Camelo</h1>
					<div class="stats">
						<span class="rating">32K</span>
						<span class="rating_text">veces leído</span>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>

			<div class="user_information">
				<h1>Tus Escritores</h1>
				<p>Esta es alguna información relevante</p>
			</div>

			<footer>
				Círculos &copy; 2016
			</footer>

		</aside>

		<div style="clear:both;"></div>
	</div>
	<div class="background_modal" id="openmodal">
		<div class="modal_container">
			<a href="#close" class="close_button"><img src="img/close.png" alt=""></a>
			<div class="modal_content">
				<section>
				<div class="avatar">
					<div class="background_image">
						<img src="img/avatar64.jpg" alt="">
					</div>
					<div class="action">
						<h2><a href="_profile.php">Benito Camelo Parado Al Fondo</a></h2>
						<h3> <a href="#">Hace dos horas</a></h3>
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="status">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur exercitationem sit dolores recusandae, reprehenderit atque eos quod excepturi sunt mollitia maxime corrupti, fuga modi vel non architecto quos perspiciatis aperiam? iciatis aperiam
					</p>
				</div>
				<div class="like_tools">
					<a href="#" class="like_button">Me gusta</a>
					<a href="#" class="dislike_button">No me gusta</a>
					<a href="#openmodal" class="comments_button">25 Comentarios</a>
				</div>
				<div class="comments_container">
				<?php for ($i=0; $i < 15; $i++) { ?>
					<div class="comment">
						<div class="image">
							<img src="img/avatar64.jpg" width="35" alt="Imagen">
						</div>
						<div class="text">
							<a href="#" class="name">Soila del Hoyo Prieto</a>
								Lorem ipsum dolor sit amet, consectetur adipisicing.
						</div>
						<div style="clear:both;"></div>
					</div>
				<?php } ?>
				<!-- ========== caja comentario ===========  -->
					<div class="comment">
						<div class="image">
							<img src="img/avatar64.jpg" width="35" alt="Imagen">
						</div>
						<div class="text">
							<form method="post" action="#">
								<input type="text" name="comment" placeholder="Haz un comentario">
							</form>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
			</section>
			</div>
		</div>
	</div>
	
</body>
</html>