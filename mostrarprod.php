<?php

require_once('crud_producto.php');
require_once('producto.php');
$crud=new CrudProducto();
$producto= new Producto();
//obtiene todos los productos con el método mostrar de la clase crud
$listaProductos=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Productos</title>
</head>
<body>
	<table border=1>
		<head>
			<td>SKU</td>
			<td>Nombre</td>
			<td>Descripción</td>
			<td>Valor</td>
			<td>Tienda</td>
			<td>Imagen</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaProductos as $producto) {?>
			<tr>
				<td><?php echo $producto->getSKU()?> </td>
				<td><?php echo $producto->getNombre() ?></td>
				<td><?php echo $producto->getDescripcion()?> </td>
				<td><?php echo $producto->getValor()?> </td>
				<td><?php echo $producto->getTienda()?> </td>
				<td><?php echo $producto->getImagen()?> </td>
				<td><a href="actualizar.php?id=<?php echo $producto->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_producto.php?id=<?php echo $producto->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
	<a href="ingresarprod.php">Nuevo Producto</a>
</body>
</html>