<?php
//incluye la clase Tienda y CrudTienda
require_once('crud_tienda.php');
require_once('tienda.php');

$crud= new CrudTienda();
$tienda= new Tienda();

	// si el elemento insertar no viene nulo llama al crud e inserta un tienda
	if (isset($_POST['insertar'])) {
		$tienda->setNombre($_POST['nombre']);
		$tienda->setApertura($_POST['apertura']);
		//llama a la función insertar definida en el crud
		$crud->insertar($tienda);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el tienda
	}elseif(isset($_POST['actualizar'])){
		$tienda->setId($_POST['id']);
		$tienda->setNombre($_POST['nombre']);
		$tienda->setApertura($_POST['apertura']);
		$crud->actualizar($tienda);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un tienda
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>