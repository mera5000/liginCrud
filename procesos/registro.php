<?php 

require_once "../clases/Usuarios.php";
$Usuarios = new Usuarios();

$nombre = $_POST['nombre'];
$amaterno = $_POST['amaterno'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$respuesta = $Usuarios->agregarUsuario($nombre,$amaterno,$email,$usuario, $password);

if ($respuesta) {
?>
	<script>
		alert("Registro exitoso!");
		window.location.href ='../registro.php';
	</script>


<?php
			
	}else{
?>
		<script>
			alert("Falla de registro");
			window.location.href ='../registro.php';
		</script>
<?php
			
	}

?>