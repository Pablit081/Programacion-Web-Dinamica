<?php

/**
 * Evalúa si un número es positivo, negativo o cero.
 * Ejercicio 1
 */
function evaluarNumero($numero) {
    if ($numero > 0) {
        return "POSITIVO";
    } elseif ($numero < 0) {
        return "NEGATIVO";
    } else {
        return "CERO";
    }
}

/**
 * Calcula la suma total de horas a partir de un arreglo.
 * Ejercicio 2
 */
function calcularTotalHoras($arregloHoras) {
    $total = 0;
    foreach ($arregloHoras as $hora) {
        // Convertimos a float por si alguien ingresa medias horas (ej: 2.5)
        $total += floatval($hora);
    }
    return $total;
}



// Acá iremos agregando las funciones de los demás ejercicios (ej. calcular horas, verificar edad, etc.)

?>