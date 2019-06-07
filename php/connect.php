<?php
$enlace=mysqli_connect("localhost","root","","SistemaDonaciones");
$clavePrivada = "!XV1D&305?";
	if(!$enlace){
		echo "Hubo un error al contactar la base de datos";
		echo "Errno: $mysqli_connect_errno()";
		echo "Error: $mysqli_connect_error()";
	}
		mysqli_query($enlace,"SET NAMES 'utf8'");
 ?>
