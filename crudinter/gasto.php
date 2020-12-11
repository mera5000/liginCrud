<?php
	class Gasto{
		private $id;
		private $concepto;
		private $cantidad;
		private $fecha;

		function __construct(){}

		public function getConcepto(){
		return $this->concepto;
		}

		public function setConcepto($concepto){
			$this->concepto = $concepto;
		}

		public function getCantidad(){
			return $this->cantidad;
		}

		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}

		public function getFecha(){
		return $this->fecha;
		}

		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>