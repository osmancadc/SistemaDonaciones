<?php
$enlace=mysqli_connect("localhost","user","pass","bd");
$clavePrivada = "sal";
	if(!$enlace){
		echo "Hubo un error al contactar la base de datos";
		echo "Errno: $mysqli_connect_errno()";
		echo "Error: $mysqli_connect_error()";
	}
		mysqli_query($enlace,"SET NAMES 'utf8'");
 ?>
