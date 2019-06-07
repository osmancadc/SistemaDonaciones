<?php
$name=$_POST['nm']." ".$_POST['ln'];
$email=$_POST['email'];
include('connect.php');
$pass=md5($clavePrivada.$_POST['pass']);
$script="INSERT INTO `user`(`userName`, `userEmail`, `userPassword`)
 VALUES ('$name','$email','$pass')";
 if ( mysqli_query($enlace,$script)) {
   echo 1;
 }else {
   echo "Error conectandose a la base de datos.";
 }

 ?>
