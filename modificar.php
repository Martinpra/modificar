<!DOCTYPE html>
<html>
<head>
	<title>Ejemplos Unidad 7</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<main class="container">

<section>
	<h1>Administrador de contenido</h1>
	<?php
	include("botonera_abm.php");

	require 'clases/Basededatos.php';
	require 'clases/Productos.php';
	require 'constantes.php';

	$base = new Basededatos(SERVIDOR, USUARIO, PASSWORD, BASE);
	$producto = new Productos($base);

	$modificar_prod = $producto->getProducto($_GET['id']);
	?>
	<form action="modificarsql.php" method="POST">
    	<label for="nombre">Nombre del producto</label>
    	<input type="text" placeholder="Nombre" name="nombre" value="<?php echo $modificar_prod[0]['producto']; ?>">
   	 	<label for="descripcion">Descripcion del producto</label>
    	<textarea rows="6" name="descripcion">
    		<?php echo $modificar_prod[0]['descripcion']; ?>
    	</textarea>
    	<label for="precio">Precio del producto</label>
    	<input type="text" placeholder="Precio" name="precio" value="<?php echo $modificar_prod[0]['precio']; ?>">
  		<input type="hidden" value="<?php echo $modificar_prod[0]['codigo']; ?>" name="id">
  		<input type="submit" value="Modificar Producto">
	</form>
	<?php
	if(isset($_GET['ok'])){
		echo "<h3>Producto cargado!</h3>";
	}
	?>

</section>
</main>
</body>
</html>