<?php
// Ejercicio 1 – En un nuevo archivo con extensión php:
// a) Cree una variable, asignarle un valor y muestre su contenido con una instrucción
// echo.
// b) Escriba el valor de la variable de forma que aparezca en un párrafo explicativo (por
// ejemplo: “El valor de X es: …”)
include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>

    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 1-A</h4>

    <p class="text-base font-style: italic text-gray-800 mb-2">Cree una variable, asignarle un valor y muestre su contenido con una instrucción echo.</p>

    <div class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <?php
        $materia = "Programacion Web Dinamica";
        echo $materia;
        ?>
    </div>

    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 1-B</h4>

    <p class="text-base font-style: italic text-gray-800 mb-2">Escriba el valor de la variable de forma que aparezca en un párrafo explicativo (por ejemplo: “El valor de X es: …”).</p>

    <div class="bg-gray-50 p-3 rounded border border-gray-200 text-gray-700">
        <?php
        echo "La materia en la que estamos es $materia";
        ?>
    </div>
</div>

<?php
include_once '../Layouts/footer.php';
?>