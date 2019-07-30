<!DOCTYPE html>
<html>
	<head>
		<title>Rutas Turisticas</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../CSS/Estilos.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.11.2.min.js" integrity="sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{  
				/*$("body").css('min-height',($(window).height()-200)+"px");*/
			});
		</script>
	</head>
	<body id="pum" class="bodyrutas">
		<header>
			<div class="contenedor">
				<div><img src="../Imagenes/logo.png" class="contenedor" height="100px" width="110px"></div>	
				<h1>TIDSM Tour Operadora </h1>
				<nav> 
					<ul>
						<li ><a href="Inicio.php">Inicio</a></li>
						<li class="actual"><a href="Rutas.php">Rutas</a></li>
						<li><a href="Contacto.php">Contacto</a></li>
						<?php 
							session_start();
							if(isset($_SESSION['conectado'])) {
						?>
							<li><a href="../HTML/Promociones.html">Promociones</a></li>
							<li><a href="../HTML/Qr.html">Registra tu c&oacute;digo QR</a></li>
							<li><a href="cerrar.php">Cerrar sesion</a></li>
						<?php
							}else{
						?>
							<li><a href="../HTML/InicioSesion.html">Iniciar sesion</a></li>
							<li><a href="RegistroF.php">Registrarte</a></li>
						<?php
							}
						?>
					</ul>
				</nav>
			</div>
		</header>
		<h1 id="tit">Etapas Ruta Calvillo</h1>
		<div class="ruta" id ="malpaso">
			<h1>Presa de Malpaso</h1>
			<img src="../Imagenes/malpaso.jpg" class="contenedor" height="100px" width="110px">
			<p>La presa de malpaso está rodeada de árboles que con su verdor 
			hacen del lugar un sitio agradable que te invita a estar un rato apreciando la 
			naturaleza. Puedes disfrutar también de una rica comida en los Restaurantes que están a su alrededor.  </p>
		</div>
		<div class="ruta" id ="flor">
			<h1>La Flor de Calvillo</h1>
			<img src="../Imagenes/flor.jpg" class="contenedor" height="100px" width="110px">
			<p>La Flor de Calvillo empezó a procesar frutas desde el 2003. Los productos son tradicionales de la región. 
			Lo que más producen es el ate de guayaba y de membrillo, de aquí se desprende el rollo de guayaba de nuez y cajeta,
			dulce de leche de jamoncillo dentro del rollo de guayaba, dulces rellenos de coco, etc.</p>
		</div>
		<div class="ruta" id ="gradas">
			<h1>Las Graditas</h1>
			<img src="../Imagenes/gradas.jpg" class="contenedor" height="100px" width="110px">
			<p>Disfruta de ” Las Graditas” en el andador Matamoros de Calvillo que fue rehabilitado con una 
			estética colonial moderna con fachadas de colores y detalles en cantera, en un evento tradicional y colorido.</p>
		</div>
		<div class="ruta" id ="centro">
			<h1>Centro Histórico de Calvillo</h1>
			<img src="../Imagenes/centro.jpg" class="contenedor" height="100px" width="110px">
			<p>Dar una vuelta por el Centro Histórico de Calvillo en donde destaca la bella plaza principal de 
			aspecto pintoresco. Este lugar data del año de 1889 y se encuentra rodeada de bancas metálicas donde 
			puedes disfrutar de una tradicional nieve de garrafa elaborada artesanalmente. Esta plaza está rodeada 
			por elegantes casonas que fueron construidas a finales del siglo XIX y principios del siglo XX.</p>
		</div>
		<div id="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d59245.551489468824!2d-102.72166036131257!3d21.863437751240916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e0!4m5!1s0x8429cf3b0710106b%3A0x5191b367a5e2dbac!2sPresa+de+Malpaso!3m2!1d21.8577099!2d-102.65331839999999!4m5!1s0x8429cefbfac5b06b%3A0xcd4c2daf237228a3!2sFabrica+de+Dulces+Flor+de+Calvillo!3m2!1d21.88204!2d-102.6746752!4m5!1s0x8429cc040bc04ff7%3A0x6711f5f7712460cc!2sLas+Graditas%2C+Calle+Matamoros+504%2C+Zona+Centro%2C+20800+Calvillo%2C+Ags.!3m2!1d21.8448429!2d-102.71951879999999!4m5!1s0x8429cc037903ed7f%3A0x9c43466ed22ca0fd!2sPlaza+Principal+103%2C+Zona+Centro%2C+20800+Calvillo%2C+Ags.!3m2!1d21.8468172!2d-102.7187331!5e0!3m2!1ses!2smx!4v1564457955896!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<footer class="f2">
			<p> Tecnologias de la Informacion area Desarrollo de Software Multiplataforma, Copyright &copy; 2019</p>
		</footer>
	</body>
</html>