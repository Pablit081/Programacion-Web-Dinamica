<?php
/**
 * Ejercicio 12 - Funciones Varias
 */

// 1. Función darMes($numero)
function darMes($numero) {
    $meses = [
        1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril",
        5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto",
        9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
    ];

    // Verificamos si el número existe en nuestro array
    if (isset($meses[$numero])) {
        return $meses[$numero];
    } else {
        return "Número de mes inválido (debe ser de 1 a 12)";
    }
}

// (Iremos sumando las demás funciones acá abajo...)
?>