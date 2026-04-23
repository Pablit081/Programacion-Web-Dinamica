<?php
// Ejercicio 11 – Completar los siguiente programa con la definición de las funciones requeridas

include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>
    
    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 11</h4>

    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parte 1</h4>

    <p class="text-base font-style: italic text-gray-800 mb-2">Completar el siguiente programa con la definición de la función requerida</p>

    <div class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <div class="bg-gray-50 p-2 rounded border text-center">
            <h3 class="text-base font-semibold text-gray-800 border-b pb-2 mb-3">Divisores</h3>
            <div class="text-gray-700 font-mono">
                <?php

                    function divisores($parametro){
                        $arrayDivisores = [];
                        for ($i = 1; $i <= $parametro; $i++) {
                            if ($parametro % $i == 0) {
                                $arrayDivisores[] = $i;
                            }
                        }
                        return $arrayDivisores;
                    }

                    $num=20;
                    echo "<strong>Los divisores de $num son: </strong>";
                    foreach (divisores($num) as $divisor) {
                        echo $divisor . " ";
                    }
            
                ?>
            </div>
        </div>
    </div>

    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parte 2</h4>

    <p class="text-base font-style: italic text-gray-800 mb-2">Completar el siguiente programa con la definición de la función requerida</p>

    <div class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <div class="bg-gray-50 p-2 rounded border text-center">
            <h3 class="text-base font-semibold text-gray-800 border-b pb-2 mb-3">Saludo</h3>
            <div class="text-gray-700 font-mono">
                <?php

                    function saludo(){
                        date_default_timezone_set('America/Argentina/Buenos_Aires');
                        $hora = date('H');
                        if ($hora >= 6 && $hora < 12) {
                            return 'Buenos días';
                        } elseif ($hora >= 12 && $hora < 18) {
                            return 'Buenas tardes';
                        } else {
                            return 'Buenas noches';
                        }
                    }

                    echo "<strong>" . saludo() , " terricola" . "</strong>";
            
                ?>
            </div>
        </div>
    </div>

</div>

<?php
include_once '../Layouts/footer.php';
?>