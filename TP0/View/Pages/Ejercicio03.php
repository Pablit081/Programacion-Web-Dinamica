<?php
// Ejercicio 3 – Crear un script php en el que generen un array unidimensional asociativo que contenga sus datos personales (apellido, nombre, documento, dirección) y luego mostrar los datos almacenados por pantalla.

include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>
    
    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 3</h4>
    
    <p class="text-base font-style: italic text-gray-800 mb-2">Crear un script php en el que generen un array unidimensional asociativo que contenga sus datos personales (apellido, nombre, documento, dirección) y luego mostrar los datos almacenados por pantalla.</p>

    <div class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <?php
            // 1. Declaro el array unidimensional asociativo
            $datosPersonales = [
                "apellido" => "Ledda",
                "nombre" => "Pablo",
                "edad" => "45",
                "direccion" => "Calle de las Rosas 1234, Código Postal 8318"
            ];

            // 2. Muestro los datos en pantalla
            echo "<strong>Mis Datos Personales</strong>" . "<br>";
            echo "<strong>Nombre:</strong> " . $datosPersonales["nombre"] . "<br>";
            echo "<strong>Apellido:</strong> " . $datosPersonales["apellido"] . "<br>";
            echo "<strong>Edad:</strong> " . $datosPersonales["edad"] . "<br>";
            echo "<strong>Dirección:</strong> " . $datosPersonales["direccion"] . "<br>";
        ?>
    </div>

</div>

<?php
include_once '../Layouts/footer.php';
?>