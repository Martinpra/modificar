<?php
require 'clases/Basededatos.php';
require 'clases/Productos.php';
require 'constantes.php';

$base = new Basededatos(SERVIDOR, USUARIO, PASSWORD, BASE);
$producto = new Productos($base);

$producto->borrarProducto($_GET['id']);
header("Location: ver.php");
?>