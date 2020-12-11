<?php
//incluye la clase Libro y CrudLibro
	require_once('../crudinter/crud_gasto.php');
	require_once('../crudinter/gasto.php');
	$crud= new CrudGasto();
	$libro=new Gasto();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['id']);
?>
<html>
<head>
	<title>Actualizar </title>
</head>
<body>
	<form action='../crudinter/administrar_gasto.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $libro->getId()?>'>
			<td>Concepto gasto:</td>
			<td> <input type='text' name='concepto' value='<?php echo $libro->getConcepto()?>'></td>
		</tr>
		<tr>
			<td>Cantidad gasto:</td>
			<td><input type='text' name='cantidad' value='<?php echo $libro->getCantidad()?>' ></td>
		</tr>
		<tr>
			<td>Fecha :</td>
			<td><input type='text' name='fecha' value='<?php echo $libro->getFecha() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="../crudinter/index.php">Volver</a>
</form>
</body>
</html>