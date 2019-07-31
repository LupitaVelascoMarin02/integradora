<?php
	$servidor = 'localhost';
	$login = 'root';
	$password = '';
	$database = 'Integradora';
	$charset = 'UTF8';
	$port = 3306;
	
	try{
		$conexion = new PDO('mysql:host='.$servidor.';dbname='.$database.';charset='.$charset.';port='.$port, $login, $password);
	}
	catch(PDOException $error){
	   echo $error->getCode().' '.$error->getMessage();
	}
	
	$username = $_POST['username'];
	$nombre = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	$correo = $_POST['correo'];
	$fn = $_POST['fechaNac'];
	$tel = $_POST['tel'];
	$pais = $_POST['pais'];
	$estado = $_POST['estado'];
	$contrasenia = $_POST['pass'];
	$pass = $_POST['pass'];
	
	$consulta = "INSERT INTO usuario(NomUsuario, Nombre, ApePat, ApeMat,FechaNac , Correo, Telefono,  Contrasenia,IdEstado, IdPais) 
	VALUES('$username','$nombre','$apellidop','$apellidom','$fn','$correo','$tel','$pass',$estado,$pais)";
	
	
	$conexion->exec($consulta);
	
	/*echo $consulta;
	try{
		$conexion->exec($consulta);
	}
	catch(PDOException $error){
	   echo $error->getCode().' '.$error->getMessage();
	}*/
	echo '<body onLoad="alert(\'REGISTRO EXITOSO\')">';
	header('Location: RegistroF.php');
?>