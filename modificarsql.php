<?php
require 'clases/Basededatos.php';
require 'clases/Productos.php';
require 'constantes.php';

$base = new Basededatos(SERVIDOR, USUARIO, PASSWORD, BASE);
$producto = new Productos($base);

$producto->actualizarProducto($_POST['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio']);

header("Location: ver.php");
?>