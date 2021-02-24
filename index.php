<!doctype html>
<html>
<head>
	<title>Microsoft</title>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="css/index.css"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>


	<!-- Realizar mediante FOR y/o FOREACH el mismo menú que aparece en la página pero de manera reducida. 
	En el código que doy aparecen demasiados elementos html del menú que son iguales por lo que hay que reducirlos lo máximo posible mediante bucles for y accesos al array $menu.
	Daos cuenta que un menú de dos niveles como es el caso consta de:
	un elem <ul> que contiene <li> (Primer nivel) y a su vez estos contienen cada uno otro elemento <ul> que contienen <li> (segundo nivel) -->
	
	<header>
		
		<h1>
			<a href="#" title="#">
				<img src="img/logo.png">
			</a>
		</h1>

		<nav>

			<?php

				
				$menu = [
					"Store"		=> ["Store Home","Dispositivos","Software y aplicaciones","Juegos","Ofertas","Más"],
					"Productos" => ["Store Home1","Dispositivos1","Software y aplicaciones1","Juegos1","Ofertas1","Más1"],
					"Soporte" 	=> ["Store Home2","Dispositivos2","Software y aplicaciones2","Juegos2","Ofertas2","Más2"],
					"Otra"		=> ["uno","dos"]
				]

			?>

			<ul>
			
				<?php

					foreach ($menu as $key => $menus) {

						echo "<li><a href='#' title='#'>". $key ."</a><ul>";

						foreach ($menus as $key => $value) {
							 

							
							 echo"<li><a href='#' title='#'>". $value ."</a></li>";
						}

						echo "</ul></li>";
	
					}
				?>
			
			</ul>
			
			<!-- 			
			<ul>
				<li><a href="#" title="#">Store</a>
					<ul>
						<li><a href="#" title="#">
							<?php echo $menu["Store"][0] ?>		
							</a>
						</li>
						<li><a href="#" title="#">
							<?php echo $menu["Store"][1] ?>		
							</a>
						</li>
						<li><a href="#" title="#">
							<?php echo $menu["Store"][2] ?>		
							</a>
						</li>
						<li><a href="#" title="#">
							<?php echo $menu["Store"][3] ?>		
							</a>
						</li>
						<li><a href="#" title="#">
							<?php echo $menu["Store"][4] ?>		
							</a>
						</li>
						<li><a href="#" title="#">
							<?php echo $menu["Store"][5] ?>		
							</a>
						</li>

					</ul>
				</li>
				<li><a href="#" title="#">Productos</a>
					<ul>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Productos"][0] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Productos"][1] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Productos"][2] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Productos"][3] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Productos"][4] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Productos"][5] ?>
							</a>
						</li>

					</ul>
				</li>

				<li><a href="#" title="#">Soporte</a>
					<ul>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Soporte"][0] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Soporte"][1] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Soporte"][2] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Soporte"][3] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Soporte"][4] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Soporte"][5] ?>
							</a>
						</li>

					</ul>
				</li>

				<li><a href="#" title="#">Otra</a>
					<ul>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Otra"][0] ?>
							</a>
						</li>
						<li>
							<a href="#" title="#">
								<?php echo $menu["Otra"][1] ?>
							</a>
						</li>
					</ul>
				</li>

			</ul>  -->
		</nav>

	</header>

	<div class="centrado">
		<section class="slider uno">
			<div class="boton der"></div>
			<div class="boton izq"></div>
			<div class="info">
				<h2>Conoce el nuevo Surface Pro</h2>
				<p>Diseñado para ti</p>
				<a class="comprar" href="#">Comprar ahora</a>
				<a href="#">Más información</a>
			</div>
			<div class="puntos"></div>
		</section>
		<section class="lista">
			<article>
				<a href="#">
					<img src="img/lista1.jpeg" alt="Foto de la lista">


					<h2>Office 365</h2>
					<p>Obtén los mejores resultados y colabora como quieras.</p>
					<p class="enlace">Más info</p>
				</a>
			</article>
			<article>
				<a href="#">
					<img src="img/lista2.jpeg" alt="Foto de la lista">
					<h2>Xbox One X</h2>
					<p>La consola más potente del mundo</p>
					<p class="enlace">Más info</p>
				</a>
			</article>
			<article>
				<a href="#">
					<img src="img/lista3.jpeg" alt="Foto de la lista">
					<h2>Xbox One S</h2>
					<p>El sistema definitivo de juego y entretenimiento en 4K.</p>
					<p class="enlace">Más info</p>
				</a>
			</article>
			<article>
				<a href="#">
					<img src="img/lista4.jpeg" alt="Foto de la lista">
					<h2>PC Windows</h2>
					<p>Windows cobra vida en estos PC de gama alta.</p>
					<p class="enlace">Más info</p>
				</a>
			</article>
			
		</section>

		<section class="slider dos">
			<div class="info">
				<h2>Conoce el nuevo Surface Pro</h2>
				<p>Diseñado para ti</p>
				<a class="comprar" href="#">Comprar ahora</a>
				<a href="#">Más información</a>
			</div>
		</section>



	</div>

	<footer></footer>









	






</body>
</html>