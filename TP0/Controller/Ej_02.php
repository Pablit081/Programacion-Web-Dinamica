<?php
// 1. Defino las variables con sus datos
$nombre = "Pablo";
$apellido = "Ledda";
$edad = 45;
$direccion = "Calle de las Rosas 1234, Código Postal 8318";

// 2. Muestro los datos en pantalla en letra mayúscula
echo "<p>Nombre: " . strtoupper($nombre) . "</p>";
echo "<p>Apellido: " . strtoupper($apellido) . "</p>";
echo "<p>Edad: " . strtoupper((string)$edad) . "</p>";
echo "<p>Dirección: " . strtoupper($direccion) . "</p>";
?>

