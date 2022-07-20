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

    $mostrar_producto = $producto->getProductos();

	?>
	<table>
		<tr class="titulos">
			<td>Código</td>
			<td>Producto</td>
			<td>Descripcion</td>
			<td>Precio</td>
			<td colspan="2">Administrador</td>
		</tr>
	
	
		<?php
		for($i=0; $i<count($mostrar_producto); $i++) { ?>
					<tr>
						<td>
						<?php echo $mostrar_producto[$i]['codigo']; ?>
					</td>
					<td>
						<?php echo $mostrar_producto[$i]['producto']; ?>
					</td>
					<td>
						<?php echo $mostrar_producto[$i]['descripcion']; ?>
					</td>
					<td>
						<?php echo $mostrar_producto[$i]['precio']; ?>
							
						</td>
					<td><a href="modificar.php?id=<?php echo $mostrar_producto[$i]['codigo']; ?>"><button type="button" class="btn btn-info">Modificar</button></a></td>
					<td><a href="eliminar.php?id=<?php echo $mostrar_producto[$i]['codigo']; ?>"><button type="button" class="btn btn-info">Eliminar</button></a></td>
					
				</tr>
			
		<?php } ?>
</table>



</section>
</main>
</body>
</html>