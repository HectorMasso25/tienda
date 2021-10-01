<?php

require_once('crud_tienda.php');
require_once('tienda.php');
$crud=new CrudTienda();
$tienda= new Tienda();
//obtiene todos los tiendas con el método mostrar de la clase crud
$listaTiendas=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Tiendas</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre</td>
			<td>Fecha de Apertura</td>
			<td>Productos</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaTiendas as $tienda) {?>
			<tr>
				<td><?php echo $tienda->getNombre() ?></td>
				<td><?php echo $tienda->getApertura()?> </td>
				<td><a href="mostrarprod.php?id=<?php echo $tienda->getId()?>&accion=a">Ver Productos</a> </td>
				<td><a href="actualizar.php?id=<?php echo $tienda->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_tienda.php?id=<?php echo $tienda->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>