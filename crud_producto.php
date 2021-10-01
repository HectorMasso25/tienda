<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudTienda{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo tienda
		public function insertar($tienda){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO tienda values(NULL,:nombre,:apertura)');
			$insert->bindValue('nombre',$tienda->getNombre());
			$insert->bindValue('apertura',$tienda->getApertura());
			$insert->execute();

		}

		// método para mostrar todos los tienda
		public function mostrar(){
			$db=Db::conectar();
			$listaTienda=[];
			$select=$db->query('SELECT * FROM tienda');

			foreach($select->fetchAll() as $tienda){
				$myTienda= new Tienda();
				$myTienda->setId($tienda['id']);
				$myTienda->setNombre($tienda['nombre']);
				$myTienda->setapertura($tienda['apertura']);
				$listaTienda[]=$myTienda;
			}
			return $listaTienda;
		}

		// método para eliminar un tienda, recibe como parámetro el id del tienda
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM tienda WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un tienda, recibe como parámetro el id del tienda
		public function obtenerTienda($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM tienda WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tienda=$select->fetch();
			$myTienda= new Tienda();
			$myTienda->setId($tienda['id']);
			$myTienda->setNombre($tienda['nombre']);
			$myTienda->setApertura($tienda['apertura']);
			return $myTienda;
		}

		// método para actualizar un tienda, recibe como parámetro el tienda
		public function actualizar($tienda){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE tienda SET nombre=:nombre,apertura=:anio  WHERE ID=:id');
			$actualizar->bindValue('id',$tienda->getId());
			$actualizar->bindValue('nombre',$tienda->getNombre());
			$actualizar->bindValue('anio',$tienda->getApertura());
			$actualizar->execute();
		}
	}
?>