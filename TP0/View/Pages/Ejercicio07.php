<?php
// Ejercicio 7 – Dado un array de 20 elementos que consiste en números reales (con coma decimal) y que cada elemento representa la venta del día de un comercio. Calcular el promedio de ventas utilizando alguna estructura iterativa.

include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>
    
    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 7</h4>
    <p class="text-base font-style: italic text-gray-800 mb-2">Dado un array de 20 elementos que consiste en números reales (con coma decimal) y que cada elemento representa la venta del día de un comercio. Calcular el promedio de ventas utilizando alguna estructura iterativa.</p>

    <div class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <?php

            $ventasDiarias = [
                1500.50, 2300.71, 1850.00, 3100.20, 950.80,
                4200.10, 2750.60, 3890.99, 1200.00, 2100.50,
                3400.25, 2900.00, 1750.30, 4500.00, 2250.10,
                3600.40, 1980.90, 2850.15, 3300.60, 4100.25
            ];

            $sumaTotal = 0;
            $cantidadDias = count($ventasDiarias);

            foreach ($ventasDiarias as $venta) {
                $sumaTotal = $sumaTotal + $venta; 
            }

            $promedio = $sumaTotal / $cantidadDias;

            echo "Cantidad de días analizados: " . $cantidadDias . "<br>";
            echo "Recaudación Total: $" . $sumaTotal . "<br>";
            echo "Promedio de Venta Diaria: $" . round($promedio, 2) . "<br>";
        ?>
    </div>

</div>

<?php
include_once '../Layouts/footer.php';
?>