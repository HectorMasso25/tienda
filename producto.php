<?php
	class Producto{
		private $sku;
		private $nombre;
		private $descripcion;
		private $valor;
		private $tienda;
		private $imagen;



		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getSKU(){
			return $this->sku;
		}

		public function setSKU($sku){
			$this->sku = $sku;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}
	
		public function setDescripcion($descripcion){
				$this->descripcion = $descripcion;
		}

		public function getValor(){
			return $this->valor;
		}
	
		public function setValor($valor){
				$this->valor = $valor;
		}

		public function getTienda(){
			return $this->tienda;
		}
	
		public function setTienda($tienda){
				$this->tienda = $tienda;
		}

		public function getImagen(){
			return $this->imagen;
		}
	
		public function setImagen($imagen){
				$this->imagen = $imagen;
		}
	}
?>