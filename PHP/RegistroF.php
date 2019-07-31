
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; />
		<title>Rutas Turisticas</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../CSS/Estilos.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.11.2.min.js" integrity="sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{  
				// function to get all records from table
				function getAll(){

					$.ajax
					({
						url: 'getEst.php',
						data: 'action=showAll',
						cache: false,
						success: function(r)
						{
							$("#getEst").html(r);
						}
					});   
				}

				getAll();
				// function to get all records from table


				// code to get all records from table via select box
				$("#getPais").change(function()
				{    
					var id = $(this).find(":selected").val();

					var dataString = 'action='+ id;

					$.ajax
					({
						url: 'getEst.php',
						data: dataString,
						cache: false,
						success: function(r)
						{
							$("#getEst").html(r);
						} 
					});
				});
				// code to get all records from table via select box
				
				$(".cont-arribax").css('min-height',($(window).height()-200)+"px");
				
				cont = 1;
				$("#abrirmenu").click(function(){
					if(cont == 1){
						$("nav").slideDown('fast');
						
						cont = 2;
					}else if(cont == 2){
						$("nav").slideUp('fast');
						
						cont = 1;
					}
				});
			});
		</script>
	</head>
	<body class="regi">
		<div id="abrirmenu">MENU</div>
		<div class="cont-arriba">
			<header>
				<div class="contenedor">
					<div><img src="../Imagenes/logo.png" class="contenedor" height="100px" width="110px"></div>
					<h1>TIDSM Tour Operadora </h1>
					<nav> 
						<ul>
							<li><a href="Inicio.php">Inicio</a></li>
							<li><a href="Rutas.php">Rutas</a></li>
							<li><a href="Contacto.php">Contacto</a></li>
							<li><a href="../HTML/InicioSesion.html">Iniciar sesion</a></li>
							<li class="actual"><a href="RegistroF.php">Registrarte</a></li>
						</ul>
					</nav>
				</div>
			</header>
			<h1 class="tit">Formulario de registro</h1>
			<form method="POST" action="Registro.php" class="reg">
				<p>
					<label for="username">Nombre de Usuario</label>
					<input type="text" placeholder="Introduzca el nombre de usuario" name="username" id="username" value="" />
				</p>
				<p>
					<label for="nombre">Nombre</label>
					<input type="text" placeholder="Introduzca el nombre" name="nombre" id="nombre" value="" />
				</p>
				<p>
					<label for="apellidop">Apellido Paterno</label>
					<input type="text" placeholder="Introduzca el apellido paterno" name="apellidop" id="apellidop" value="" />
				</p>
				<p>
					<label for="apellidom">Apellido Materno</label>
					<input type="text" placeholder="Introduzca el apellido materno" name="apellidom" id="apellidom" value="" />
				</p>
				<p>
					<label for="correo">Correo</label>
					<input type="mail" placeholder="Introduzca su correo" name="correo" id="correo" value="" />
				</p>
				<p> 
					<label for ="fechaNac">Fecha de Nacimiento</label>
					<input type="date" placeholder="Introduzca la fecha de nacimiento" name="fechaNac" id="fechaNac" value="" />
				</p>
				<p>
					<label for="tel">Tel&eacute;fono</label>
					<input type="text" placeholder="Introduzca el Tel&eacute;fono" name="tel" id="tel" value="" />
				</p>
				<p>
					<label for="getPais">Pais</label>
					<select id="getPais" name="pais">
						<option value="showAll" selected="selected">Show All Products</option>
						<?php
							require_once 'config.php';
							
							$stmt = $dbcon->prepare('SELECT * FROM pais');
							$stmt->execute();
							
							while($row=$stmt->fetch(PDO::FETCH_ASSOC))
							{
								extract($row);
								?>
								<option value="<?php echo $IdPais; ?>"><?php echo $Nombre; ?></option>
								<?php
							}
						?>
					</select>
				</p>
				<p>
					<label for="getEst">Estado</label>
					<select id="getEst" name="estado"></select>
				</p>
				<p>
					<label for="pass">Contrase&ntilde;a:</label>
					<input type="password" placeholder="Introduzca la Contrase&ntilde;a" name="pass" id="pass" value="" />
				</p>
				<p>
					<button>Registrar</button>
				</p>
			</form>
			<footer class="f5">
				<p> Tecnologias de la Informacion area Desarrollo de Software Multiplataforma, Copyright &copy; 2019</p>
			</footer>
		</div>	
	</body>
	
</html>