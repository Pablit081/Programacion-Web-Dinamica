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

/**
 * Convierte el código numérico del nivel de estudio a texto.
 * Ejercicio 5
 */
function obtenerTextoEstudios($codigo) {
    switch ($codigo) {
        case '1':
            return "no tiene estudios formales";
        case '2':
            return "estudios primarios";
        case '3':
            return "estudios secundarios";
        default:
            return "nivel de estudios no especificado";
    }
}

/**
 * Encapsula la captura de datos sin importar el método (GET o POST)
 * @return array
 */
function data_submitted() {
    $data = array();
    if (!empty($_POST)) {
        $data = $_POST;
    } elseif (!empty($_GET)) {
        $data = $_GET;
    }
    return $data;
}

/**
 * Cálculo de la tarifa
 * Ejercicio 8
 */
function calcularTarifaCine($edad, $esEstudiante) {
    if ($edad < 12) {
        $precio = 160;
    } elseif ($esEstudiante && $edad >= 12) {
        $precio = 180;
    } else {
        $precio = 300;
    }
    return $precio;
}

?>