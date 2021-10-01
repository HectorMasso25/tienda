<html>
<head>
	<title> Ingresar Tienda</title>
</head>
<header>
Ingresa los datos del Tienda
</header>
<form action='administrar_tienda.php' method='post'>
	<table>
		<tr>
			<td>Nombre tienda:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Fecha de Apertura:</td>
			<td><input type='date' name='apertura' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>