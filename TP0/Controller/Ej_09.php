<?php
// 1. Definimos un array enumerativo (índices numéricos) con 10 enteros 
$numeros = [15, 42, 8, 99, 23, 4, 76, 12, 55, 31];

// 2. Inicializamos la variable que guardará el máximo.
// ¡TRUCO CLAVE!: Siempre conviene inicializarla con el primer elemento del array,
// en lugar de ponerle un 0. Si todos los números del array fueran negativos, 
// inicializar en 0 te daría un resultado falso.
$maximo = $numeros[0];

// 3. Estructura iterativa para recorrer el array y encontrar el mayor 
foreach ($numeros as $numero) {
    // Comparamos: si el número de la vuelta actual es mayor al que teníamos guardado...
    if ($numero > $maximo) {
        // ... actualizamos nuestro máximo con este nuevo campeón.
        $maximo = $numero;
    }
}

// 4. Mostramos el resultado por pantalla 
echo "<h3>Ejercicio 9 - Encontrar el Máximo</h3>";

// (Opcional) Usamos implode() para imprimir el array original de forma fácil y poder verificar
echo "Los números analizados son: " . implode(", ", $numeros) . "<br><br>";

echo "<strong>El número máximo encontrado en el array es: " . $maximo . "</strong>";
?>