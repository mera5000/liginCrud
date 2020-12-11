<html>
<head>
	<title> Ingresar gasto</title>
</head>
<header>
Ingresa los datos de tus gastos
</header>
<form action='administrar_gasto.php' method='post'>
	<table>
		<tr>
			<td>Concepto gasto:</td>
			<td> <input type='text' name='concepto'></td>
		</tr>
		<tr>
			<td>Cantidad gasto:</td>
			<td><input type='text' name='cantidad' ></td>
		</tr>
		<tr>
			<td>Fecha </td>
			<td><input type='text' name='fecha' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>