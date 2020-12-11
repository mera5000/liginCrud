<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		require_once "dependencias.php";
		require_once "menu.php";
		require_once "../crudinter/index.php";
		

	?>
	<html>
	<head>
		<title>Administrar gastos</title>
	</head>	
	<body>
	
</html>


<?php 

	}else{
		header("location:../index.php");
	}
	
 ?>