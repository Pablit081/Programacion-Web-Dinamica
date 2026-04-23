<?php
// Ejercicio 5 – Mostrar por pantalla la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
// La salida debe verse con el siguiente formato:
// 2 x 1 es 2
// 2 x 2 es 4......

include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>
    
    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 5</h4>

    <p class="text-base font-style: italic text-gray-800 mb-2">Mostrar por pantalla la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.</p>
    <p class="text-base font-style: italic text-gray-800 mb-2">La salida debe verse con el siguiente formato:</p>
    <p class="text-base font-style: italic text-gray-800 mb-2">2 x 1 es 2</p>
    <p class="text-base font-style: italic text-gray-800 mb-2">2 x 2 es 4</p>
    <p class="text-base font-style: italic text-gray-800 mb-2">...</p>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-gray-50 p-4 rounded border text-center">
        <h3 class="text-base font-semibold text-gray-800 border-b pb-2 mb-3">Usando FOR</h3>
        <div class="text-gray-700 font-mono">
            <?php
                $multiplicador = 2;
                $limite = 10;
                for ($i = 1; $i <= $limite; $i++) {
                    $resultado = $multiplicador * $i;
                    echo $multiplicador . " x " . $i . " es " . $resultado . "<br>";
                }
            ?>
        </div>
    </div>

    <div class="bg-gray-50 p-4 rounded border text-center">
        <h3 class="text-base font-semibold text-gray-800 border-b pb-2 mb-3">Usando WHILE</h3>
        <div class="text-gray-700 font-mono">
            <?php
                $j = 1;
                while ($j <= $limite) {
                    $resultado = $multiplicador * $j;
                    echo $multiplicador .  " x "  . $j . " es "  . $resultado . "<br>";
                    $j++; 
                }
            ?>
        </div>
    </div>

    <div class="bg-gray-50 p-4 rounded border text-center">
        <h3 class="text-base font-semibold text-gray-800 border-b pb-2 mb-3">Usando DO/WHILE</h3>
        <div class="text-gray-700 font-mono">
            <?php
                $k = 1;
                do {
                    $resultado = $multiplicador * $k;
                    echo $multiplicador . " x " . $k . " es " . $resultado . "<br>";
                    $k++;
                } while ($k <= $limite);
            ?>
        </div>
    </div>

</div>

<?php
include_once '../Layouts/footer.php';
?>