<?php
    $multiplicador = 2;
    $limite = 10;
    
    for ($i = 1; $i <= $limite; $i++) {
        $resultado = $multiplicador * $i;
        echo $multiplicador . " x " . $i . " es " . $resultado . "<br>";
    }

    
    $j = 1;
    while ($j <= $limite) {
        $resultado = $multiplicador * $j;
        echo $multiplicador . " x " . $j . " es " . $resultado . "<br>";
        $j++; 
    }

    $k = 1;
    do {
        $resultado = $multiplicador * $k;
        echo $multiplicador . " x " . $k . " es " . $resultado . "<br>";
        $k++;
    } while ($k <= $limite);
?>