<?php
// 1. Declaro el array unidimensional asociativo
$datosPersonales = [
    "apellido" => "Ledda",
    "nombre" => "Pablo",
    "edad" => "45",
    "direccion" => "Calle de las Rosas 1234, Código Postal 8318"
];

// 2. Muestro los datos en pantalla

echo "<h3>Mis Datos Personales</h3>";
echo "<p><strong>Nombre:</strong> " . $datosPersonales["nombre"] . "</p>";
echo "<p><strong>Apellido:</strong> " . $datosPersonales["apellido"] . "</p>";
echo "<p><strong>Edad:</strong> " . $datosPersonales["edad"] . "</p>";
echo "<p><strong>Dirección:</strong> " . $datosPersonales["direccion"] . "</p>";
?>