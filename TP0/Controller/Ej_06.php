<?php

// 1. Definimos el array bidimensional asociativo
$horarioCursada = [
    'Lunes' => [
        'materia' => 'Diseño Gráfico',
        'carga_horaria' => 2
    ],
    'Martes' => [
        'materia' => 'Programación Web Dinámica',
        'carga_horaria' => 2
    ],
    'Miércoles' => [
        'materia' => 'Diseño Gráfico',
        'carga_horaria' => 2
    ],
    'Jueves' => [
        'materia' => 'Programación Web Dinámica',
        'carga_horaria' => 2
    ],
    'Viernes' => [
        'materia' => 'Programación Web Dinámica',
        'carga_horaria' => 3
    ]
];

foreach ($horarioCursada as $dia => $detalle) {
    echo "<strong>Día:</strong> " . $dia . "<br>";
    echo "<strong>Materia:</strong> " . $detalle['materia'] . "<br>";
    echo "<strong>Carga Horaria:</strong> " . $detalle['carga_horaria'] . "<br>";
}