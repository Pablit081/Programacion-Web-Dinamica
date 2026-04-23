<?php
// Ejercicio 8 – Dado el siguiente array: $nombres = array(‘roberto’,’juan’,’marta’,’moria’,’martin’,’jorge’,’miriam’,’nahuel’,’mirta’). Realizar un programa en PHP que lo recorra y genere un nuevo array con aquellos nombres que comiencen con la letra m. Definir qué bucle conviene usar y luego mostrar el array resultado por pantalla sin usar var_dump ni print_r. Los nombres deben aparecer uno debajo del otro.

include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>
    
    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 8</h4>
    <p class="text-base font-style: italic text-gray-800 mb-2">Dado el siguiente array: $nombres = array(‘roberto’,’juan’,’marta’,’moria’,’martin’,’jorge’,’miriam’,’nahuel’,’mirta’). Realizar un programa en PHP que lo recorra y genere un nuevo array con aquellos nombres que comiencen con la letra m. Definir qué bucle conviene usar y luego mostrar el array resultado por pantalla sin usar var_dump ni print_r. Los nombres deben aparecer uno debajo del otro.</p>

    <div class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <?php

            $nombres = [
                'roberto','juan','marta','moria','martin','jorge','miriam','nahuel','mirta'
            ];

            $nombresConM = [];
            
            foreach ($nombres as $nombre){

                if (str_starts_with($nombre,'m')){
                    $nombresConM[] = $nombre;
                }
            }

            echo "<strong>Nombres filtrados con 'm':</strong><br>";
            
            foreach ($nombresConM as $nombre){
                echo "<strong>" . $nombre . "</strong>" . "<br>";
            }

        ?>
    </div>

</div>

<?php
include_once '../Layouts/footer.php';
?>