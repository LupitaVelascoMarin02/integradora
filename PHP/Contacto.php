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
	<body class="bodycontacto">
		<header>
			<div class="contenedor" class="com">
				<div><img src="../Imagenes/logo.png" class="contenedor" height="100px" width="110px"></div>
				<h1>TIDSM Tour Operadora </h1>
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
		<h1 id="tit">Contactanos</h1>
		<div class="cont" >
			<p>
				<label for="phone">Telefonos: 4950000000  y 4490000000</label>
			</p>
			<p>
				<label for="correo">Email: tidsmstours@utcalvillo.com</label>
			</p>
			<p>
				<label for="facebook">Facebook: TIDSM Tours</label>
				
			</p>
			<p>
				<label for="twitter">Twitter: Tidsm Tours Operadora</label>
			</p>
		</div>
		<footer class="f7">
			<p> Tecnologias de la Informacion area Desarrollo de Software Multiplataforma, Copyright &copy; 2019</p>
		</footer>
	</body>
</html>