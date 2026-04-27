<?php
// Ejercicio 9 – Dado un array enumerativo de 10 elementos de números enteros (sin coma decimal), encontrar el máximo de todos esos números usando una estructura iterativa y mostrarlo por pantalla.

include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>
    
    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 9</h4>
    <p class="text-base font-style: italic text-gray-800 mb-2">Dado un array enumerativo de 10 elementos de números enteros (sin coma decimal), encontrar el máximo de todos esos números usando una estructura iterativa y mostrarlo por pantalla.</p>

    <div class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <?php

            $numeros = [
                15, 42, 8, 99, 23, 4, 76, 12, 55, 31
            ];

            $maximo = $numeros[0];
            
            foreach ($numeros as $numero){

                if ($numero > $maximo){
                    $maximo = $numero;
                }
            }
            echo "<strong>Los números analizados son: </strong>" . implode(" - ", $numeros) . "<br>";
            echo "<strong>El número máximo encontrado en el array es: </strong>" . $maximo . "<br>";

        ?>
    </div>

</div>

<?php
include_once '../Layouts/footer.php';
?>