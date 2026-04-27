<?php
$nombres = ['roberto', 'juan', 'marta', 'moria', 'martin', 'jorge', 'miriam', 'nahuel', 'mirta'];

$nombresConM = [];

//Cuando no nos importa el número de posición (índice) sino solamente el valor, el foreach es la estructura más eficiente y limpia.
foreach ($nombres as $nombre) {
    
    // Usamos str_starts_with(), una función ideal para las versiones modernas de PHP que estás corriendo.
    if (str_starts_with($nombre, 'm')) {
        
        // Si la condición es verdadera, "empujamos" el nombre al final del nuevo array.
        // Los corchetes vacíos [] le dicen a PHP: "agregalo en la próxima posición libre".
        $nombresConM[] = $nombre;
    }
}

// 4. Mostrar por pantalla (sin usar print_r ni var_dump)
echo "<h3>Nombres filtrados:</h3>";

// Como el array resultado puede tener varios elementos, necesitamos OTRO bucle para imprimirlo
foreach ($nombresConM as $nombreFiltrado) {
    // Concatenamos la etiqueta <br> para cumplir con la regla de que aparezcan uno debajo del otro
    echo $nombreFiltrado . "<br>"; 
}
?>