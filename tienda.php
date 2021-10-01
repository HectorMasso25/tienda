<?php
	class Tienda{
		private $id;
		private $nombre;
		private $autor;
		private $anio_edicion;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		

		public function getApertura(){
		return $this->anio_edicion;
		}

		public function setApertura($anio_edicion){
			$this->anio_edicion = $anio_edicion;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>