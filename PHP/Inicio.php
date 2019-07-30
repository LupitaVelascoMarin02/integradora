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
				$("body").css('min-height',($(window).height()-200)+"px");
			});
		</script>
	</head>
	<body>
		<header>
			<div class="contenedor">
				<div><img src="../Imagenes/logo.png" class="contenedor" height="100px" width="110px"></div>
				<h1>TIDSM Tour Operadora</h1>
				<nav> 
					<ul>
						<li class="actual"><a href="Inicio.php">Inicio</a></li>
						<li><a href="Rutas.php">Rutas</a></li>
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
		<div class="slider">
			<ul class="slider">
				<li> <img src="../Imagenes/uno.jpg" class="slider" height="85%" width="100%"></li>
				<li> <img src="../Imagenes/dos.jpg" class="slider" height="85%" width="100%"></li>
				<li> <img src="../Imagenes/ocho.jpg" class="slider" height="85%" width="100%"></li>
				<li> <img src="../Imagenes/diez.jpg" class="slider" height="85%" width="100%"></li>
				<li> <img src="../Imagenes/cinco.jpg" class="slider" height="85%" width="100%"></li>
				<li> <img src="../Imagenes/seis.jpg" class="slider" height="85%" width="100%"></li>
				<li> <img src="../Imagenes/siete.jpg" class="slider" height="85%" width="100%"></li>
			</ul>
		</div>
		<div class="contenedor">
			<div class="contenedor" id="primero">
				<h1>MISION</h1>
				<p>La misión define principalmente cual es nuestra labor o actividad en el mercado, además 
				se puede completar haciendo referencia al público hacia el que va dirigido y con la singularidad, 
				particularidad o factor diferencial, mediante la cual desarrolla su labor o actividad.</p>
			</div>
			<div class="contenedor" id="segundo">
				<h1>VISION</h1>
				<p>La visión define las metas que pretendemos conseguir en el futuro. Estas metas tienen que ser 
				realistas y alcanzables, puesto que la propuesta de visión tiene un carácter inspirador y motivador.</p>
			</div>
			<div class="contenedor" id="tercero">
				<h1>VALORES</h1>
				<p>Los valores son principios éticos sobre los que se asienta la cultura de nuestra empresa, y nos 
				permiten crear nuestras pautas de comportamiento.</p>
			</div>
		</div>
		<footer class="f1">
			<p> Tecnologias de la Informacion area Desarrollo de Software Multiplataforma, Copyright &copy; 2019</p>
		</footer>
	</body>
	
</html>