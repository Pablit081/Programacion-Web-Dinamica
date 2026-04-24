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

/**
 * Genera un texto de presentación con los datos personales.
 * Ejercicio 3
 */
function generarSaludo($nombre, $apellido, $edad, $direccion) {
    // Usamos comillas dobles para que PHP interprete las variables adentro del texto
    return "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
}

/**
 * Determina si una persona es mayor de edad.
 * Ejercicio 4
 */
function esMayorDeEdad($edad) {
    // La consigna dice: mayor o igual a 18
    return ($edad >= 18);
}


// Siguiente funcion de los demás ejercicios...

?>