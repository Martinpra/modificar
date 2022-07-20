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
	?>
	<form action="altassql.php" method="POST">
    	<label for="nombre">Nombre del producto</label>
    	<input type="text" placeholder="Nombre" name="nombre">
   	 	<label for="descripcion">Descripcion del producto</label>
    	<textarea rows="3" name="descripcion"></textarea>
    	<label for="precio">Precio del producto</label>
    	<input type="text" placeholder="Precio" name="precio">
  
  		<input type="submit" value="Cargar Producto">
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