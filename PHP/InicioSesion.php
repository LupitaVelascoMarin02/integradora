<!DOCTYPE html>
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

if (isset($_POST['nombredeu']) && isset($_POST['pass'])) {
	$consulta = "SELECT NomUsuario, Contrasenia FROM Usuario WHERE NomUsuario='".$_POST['nombredeu']."' AND Contrasenia='".$_POST['pass']."'";
	$resultado= $conexion->query($consulta);
	
	while($registro = $resultado->fetch()){
		$login_valido=$registro['NomUsuario'];
		$pwd_valida=$registro['Contrasenia'];
		
	}
	if (isset($login_valido)&& isset($pwd_valida)) {
	
		echo '<body onLoad="alert(\'Sesion activa\')">';
		session_start ();
		
		$_SESSION['conectado'] = true;
		
		header ('location: Inicio.php');
		
	}
	else {

		echo '<body onLoad="alert(\'Usuario no existente o datos erroneos\')">';
		echo '<meta http-equiv="refresh" content="0;URL=Inicio.php">';
	}
}
else {
	echo 'Las variables no fueron declaradas.';
}
?>