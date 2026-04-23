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

// Acá iremos agregando las funciones de los demás ejercicios (ej. calcular horas, verificar edad, etc.)

?>