<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Usuarios.php"

	$obj = new usuarios();

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$usuario=$_POST['usuario'];
	$passsword=$_POST['password'];

 ?>