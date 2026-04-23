<?php
// Ejercicio 6 – Crear un programa en php en el que generen un array bidimensional asociativo que contenga para cada día de la semana la materia que cursan junto con la carga horaria de la misma. Luego recorrer el array usando una estructura foreach que muestre por pantalla la información contenida.
include_once '../Layouts/header.php';
?>

<div class="bg-white p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-6">Trabajo Práctico 1</h2>
    
    <h4 class="text-lg font-semibold text-gray-800 mb-2">Ejercicio 6</h4>

    <p class="text-base font-style: italic text-gray-800 mb-2">Crear un programa en php en el que generen un array bidimensional asociativo que contenga para cada día de la semana la materia que cursan junto con la carga horaria de la misma. Luego recorrer el array usando una estructura foreach que muestre por pantalla la información contenida.</p>
    
    <div class="bg-gray-50 p-3 rounded border border-gray-200 mb-6 text-gray-700">
        <?php
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

            foreach ($horarioCursada as $dia => $detalle):
        ?>
            <div class="bg-gray-50 border-l-4 border-blue-500 p-4 rounded shadow-sm hover:shadow-md transition-shadow mb-4">
                <h3 class="text-lg font-bold text-gray-800 border-b pb-2 mb-2">
                    <?php echo $dia; ?>
                </h3>
                
                <p class="text-gray-700 mb-1">
                    <span class="font-semibold text-gray-900">Materia:</span> 
                    <?php echo $detalle['materia']; ?>
                </p>
                <p class="text-gray-700">
                    <span class="font-semibold text-gray-900">Carga Horaria:</span> 
                    <?php echo $detalle['carga_horaria']; ?> horas
                </p>
            </div>
            
        <?php endforeach; ?>
    </div>

</div>

<?php
    include_once '../Layouts/footer.php';
?>