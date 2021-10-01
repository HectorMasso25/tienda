<?php
//incluye la clase Tienda y CrudTienda
	require_once('crud_tienda.php');
	require_once('tienda.php');
	$crud= new CrudTienda();
	$tienda=new Tienda();
	//busca el tienda utilizando el id, que es enviado por GET desde la vista mostrar.php
	$tienda=$crud->obtenerTienda($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Tienda</title>
</head>
<body>
	<form action='administrar_tienda.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $tienda->getId()?>'>
			<td>Nombre tienda:</td>
			<td> <input type='text' name='nombre' value='<?php echo $tienda->getNombre()?>'></td>
		</tr>
		
		<tr>
			<td>Fecha Apertura:</td>
			<td><input type='date' name='apertura' value='<?php echo $tienda->getApertura() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>