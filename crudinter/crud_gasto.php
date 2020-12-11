<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudGasto{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO t_gastos values(NULL,:concepto,:cantidad,:fecha)');
			$insert->bindValue('concepto',$libro->getConcepto());
			$insert->bindValue('cantidad',$libro->getCantidad());
			$insert->bindValue('fecha',$libro->getFecha());
			$insert->execute();

		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT *FROM t_gastos');

			foreach($select->fetchAll() as $libro){
				$myLibro= new Gasto();
				$myLibro->setConcepto($libro['concepto']);
				$myLibro->setCantidad($libro['cantidad']);
				$myLibro->setFecha($libro['fecha']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM t_gastos WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM t_gastos WHERE ID=:id');
			$select->bindValue('id',$id);
			//$select->execute();
			$libro=$select->fetch();
			$myLibro= new Gasto();
			$myLibro->setId($libro['id']);
			$myLibro->setConcepto($libro['concepto']);
			$myLibro->setCantidad($libro['cantidad']);
			$myLibro->setFecha($libro['fecha']);
			return $myLibro;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE t_gastos SET concepto=:concepto, cantidad=:cantidad, fecha=:fecha  WHERE ID=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('concepto',$libro->getConcepto());
			$actualizar->bindValue('cantidad',$libro->getCantidad());
			$actualizar->bindValue('fecha',$libro->getfecha());
			$actualizar->execute();
		}
	}
?>