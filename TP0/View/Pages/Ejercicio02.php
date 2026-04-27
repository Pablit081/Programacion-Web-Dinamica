<?php
// Ejercicio 2 – Crear un script php que guarde en diferentes variables su nombre, apellido, edad y dirección y luego muestre en pantalla estos datos con letra mayúscula.
// Cuando ejecute la pagina dentro del navegador, observe el código fuente y analice las diferencias entre el código escrito y el código que esta viendo.

include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>
    
    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 2</h4>
    <p class="text-base font-style: italic text-gray-800 mb-2">Crear un script php que guarde en diferentes variables su nombre, apellido, edad y dirección y luego muestre en pantalla estos datos con letra mayúscula.
    Cuando ejecute la pagina dentro del navegador, observe el código fuente y analice las diferencias entre el código escrito y el código que esta viendo</p>
    <p class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <?php
// 1. Defino las variables con sus datos
$nombre = "Pablo";
$apellido = "Ledda";
$edad = 45;
$direccion = "Calle de las Rosas 1234, Código Postal 8318";

// 2. Muestro los datos en pantalla en letra mayúscula
echo "<strong>Nombre:</strong> " . strtoupper($nombre). "<br>";
echo "<strong>Apellido:</strong> " . strtoupper($apellido) . "<br>";
echo "<strong>Edad:</strong> " . strtoupper((string)$edad) . "<br>";
echo "<strong>Dirección:</strong> " . strtoupper($direccion) . "<br>";
        ?>
    </p>

</div>

<?php
include_once '../Layouts/footer.php';
?>