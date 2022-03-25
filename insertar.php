<?php 
	$conexion=mysqli_connect('localhost','root','','prueba'); // nombre de la database
	$nombre=$_POST['nombre']; // variables de los inputs 
	$apellido=$_POST['apellido'];
	$usuario=$_POST['usuario'];
	$password=sha1($_POST['password']);
// insert Mysql
	$sql="INSERT into datos (nombre,apellido,usuario,password)
			values ('$nombre','$apellido','$usuario','$password')";
	echo mysqli_query($conexion,$sql);
 ?>