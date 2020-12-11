<?php
//incluye la clase Libro y CrudLibro
require_once('../crudinter/crud_gasto.php');
require_once('../crudinter/gasto.php');

$crud= new CrudGasto();
$libro= new Gasto();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$libro->setConcepto($_POST['concepto']);
		$libro->setCantidad($_POST['cantidad']);
		$libro->setFecha($_POST['fecha']);
		//llama a la función insertar definida en el crud
		$crud->insertar($libro);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$libro->setId($_POST['id']);
		$libro->setConcepto($_POST['concepto']);
		$libro->setCantidad($_POST['cantidad']);
		$libro->setFecha($_POST['fecha']);
		$crud->actualizar($libro);
		header('Location:../crudinter/ index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: ../crudinter/index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: ../crudinter/actualizar.php');
	}
?>