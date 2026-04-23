<?php
// 1. Definimos el array con 20 elementos de números reales (floats) hardcodeados
$ventasDiarias = [
    1500.50, 2300.71, 1850.00, 3100.20, 950.80,
    4200.10, 2750.60, 3890.99, 1200.00, 2100.50,
    3400.25, 2900.00, 1750.30, 4500.00, 2250.10,
    3600.40, 1980.90, 2850.15, 3300.60, 4100.25
];

// 2. Inicializamos las variables auxiliares
$sumaTotal = 0;
$cantidadDias = count($ventasDiarias);

// 3. Estructura iterativa: recorremos el array elemento por elemento
foreach ($ventasDiarias as $venta) {
    $sumaTotal = $sumaTotal + $venta; 
    $cantidadDias += $suma;
}

$promedio = $sumaTotal / $cantidadDias;

echo "Cantidad de días analizados: " . $cantidadDias . "<br>";
echo "Recaudación Total: $" . $sumaTotal . "<br>";
echo "Promedio de Venta Diaria: $" . $promedio . "<br>";
?>