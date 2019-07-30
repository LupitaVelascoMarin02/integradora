<?php
	// Iniciaamos sesion
	session_start ();

	// Destruimos las variables
	session_unset ();

	// Destruimos la sesion
	session_destroy ();

	// Redirigimos al usuario a la pagina de inicio
	header ('location: Inicio.php');
?>