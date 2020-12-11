<html>
<head>
	<title>Registro de Usuario</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<div class="container">
		<h1>Registro de Usuarios</h1>
		<div class="row">
			<div class="col-sm-4">
				<form action="procesos/registro.php" method="post">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" required="">
					<label for="amaterno">Apellido Materno</label>
					<input type="text" name="amaterno" class="form-control" required="">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" required="">
					<label for="usuario">Usuario</label>
					<input type="text" name="usuario" class="form-control" required="">
					<label for="password">Password</label>
					<input type="text" name="password" class="form-control" required="">
					<br>
					<button class="btn btn-danger">Registrar</button>
					<a href="index.php" >Login</a>
				</form>
				
			</div>
		</div>
	</div>

</body>
</html>