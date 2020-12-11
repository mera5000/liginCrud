<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php  
		require_once "dependencias.php"; 
		session_start();
		if(isset($_SESSION['usuario'])) {
			header("location:vistas/inicio.php");

		}

	?>
</head>
<body>
	<div class="container">
		<h1>Ingresa</h1>
		<div class="row">
			<div class="col-sm-4">
				<form action="procesos/login.php" method="post">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" required="">
					<label for="amaterno">Apellido Materno</label>
					<input type="text" name="amaterno" class="form-control" required="">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" required="">
					<label for="usuario">Usuario</label>
					<input type="text" name="usuario" id="usuario" class="form-control">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control">
					<br>
					<button class="btn btn-primary">Entrar</button>
					<a href="registro.php" >Registrar</a>

				</form>
			</div>
		</div>
	</div>
</body> 
</html>