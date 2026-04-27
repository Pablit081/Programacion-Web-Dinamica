<?php
// ==========================================
// PARTE 1: Función divisores()
// ==========================================

// 1. Definimos la función que pide un número como parámetro
function divisores($parametro) {
    $arrayDivisores = []; // Array vacío para guardar los resultados
    
    // Un divisor es aquel número que, al dividir nuestro parámetro, deja resto 0.
    // Recorremos desde el 1 hasta el número mismo.
    for ($i = 1; $i <= $parametro; $i++) {
        // El operador % (módulo) calcula el resto de la división
        if ($parametro % $i == 0) {
            $arrayDivisores[] = $i; // Lo agregamos al array
        }
    }
    
    return $arrayDivisores; // Devolvemos el array lleno
}

echo "<h3>Ejercicio 11 - Divisores</h3>";

// Código provisto por la cátedra (corregido el "$num 20;")
$num = 20; 
echo "Los divisores de $num son: <br>";

foreach (divisores($num) as $divisor) {
    echo "$divisor <br />";
}

echo "<hr>"; // Línea separadora HTML

// ==========================================
// PARTE 2: Función saludo()
// ==========================================

// 2. Definimos la función que no recibe parámetros pero evalúa la hora
function saludo() {
    // Dato vital: PHP usa la zona horaria del servidor (generalmente Europa/UTC). 
    // Para que el saludo coincida con tu reloj real en Argentina, seteamos tu zona horaria.
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    
    // La función date('G') devuelve la hora actual en formato 24hs y sin ceros iniciales (0 a 23)
    $horaActual = (int)date('G'); 
    
    // Evaluamos los rangos que pide el TP
    if ($horaActual >= 5 && $horaActual <= 12) {
        return "Buenos días";
    } elseif ($horaActual >= 13 && $horaActual <= 19) {
        return "Buenas tardes";
    } else {
        // Cubre de 20:00 a 4:59
        return "Buenas noches"; 
    }
}

echo "<h3>Ejercicio 11 - Saludo</h3>";

// Código provisto por la cátedra (corregida la concatenación)
$nombre = "Pablo"; // Puse tu nombre en la variable
echo saludo() . " $nombre!"; 

?>