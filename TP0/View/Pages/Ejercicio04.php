<?php
// Ejercicio 4 – Realizar un programa que, a partir de tres variables enteras llamadas $a, $b y $c, muestre por pantalla el valor de la mayor y la menor de ellas. Si por ejemplo asignamos los valores 15, 94 y 73 a $a, $b y $c respectivamente, por pantalla debe mostrarse:
// El mayor valor de 15, 94 y 73 es 73
// El menor valor de 15, 94 y 73 es 15

include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>
    
    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 4</h4>
    <p class="text-base font-style: italic text-gray-800 mb-2">Realizar un programa que, a partir de tres variables enteras llamadas $a, $b y $c, muestre por pantalla el valor de la mayor y la menor de ellas. Si por ejemplo asignamos los valores 15, 94 y 73 a $a, $b y $c respectivamente, por pantalla debe mostrarse:</p>
    <p class="text-base font-style: italic text-gray-800 mb-2">El mayor valor de 15, 94 y 73 es 73</p>
    <p class="text-base font-style: italic text-gray-800 mb-2">El menor valor de 15, 94 y 73 es 15</p>

    <div class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <?php

            $a = 15;
            $b = 94;
            $c = 73;

            // Utilizo max() y min()
            $mayor = max($a, $b, $c);
            $menor = min($a, $b, $c);

            echo "El mayor valor de $a, $b y $c es <strong>$mayor</strong>" . "<br>";
            echo "El menor valor de $a, $b y $c es <strong>$menor</strong>" . "<br>";
        ?>
    </div>

</div>

<?php
include_once '../Layouts/footer.php';
?>