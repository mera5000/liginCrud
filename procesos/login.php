<?php 
	//esta funcion debe ser agregada si se va a utilizar alguna variable de sesion

	session_start();
	require_once "../clases/Usuarios.php";

	$Usuarios = new Usuarios();



	$nombre = $_POST['nombre'];
	$amaterno = $_POST['amaterno'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$Usuarios->logycrudd($nombre, $amaterno, $email, $usuario, $password);

	
 ?>