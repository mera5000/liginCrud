<?php

require_once('../crudinter/crud_gasto.php');
require_once('../crudinter/gasto.php');
$crud=new CrudGasto();
$libro= new Gasto();

$listaLibros=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Gastos</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Concepto de gasto</td>
			<td>Cantidad de gasto</td>
			<td>Fecha</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaLibros as $libro) {?>
			<tr>
				<td><?php echo $libro->getConcepto() ?></td>
				<td><?php echo $libro->getCantidad() ?></td>
				<td><?php echo $libro->getfecha()?> </td>
				<td><a href="../crudinter/actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_gasto.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="../crudinter/index.php">Volver</a>
</body>
</html>