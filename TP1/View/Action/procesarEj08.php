<?php
include_once '../../Util/funciones.php';

// 1. Capturamos los datos de forma segura
$datos = data_submitted();

// 2. Verificamos si los datos necesarios están presentes
if (isset($datos['edad'], $datos['estudiante'])) {
    
    $edad = intval($datos['edad']);
    $estudianteValue = $datos['estudiante']; // Guardamos el original ('si' o 'no')

    // 3. Validación del lado del servidor (Tu lógica de rango)
    if ($edad > 0 && $edad < 99) {
        
        $esEstudianteBool = ($estudianteValue === 'si');

        // 4. Invocamos la lógica del Modelo
        $precioFinal = calcularTarifaCine($edad, $esEstudianteBool);

        // 5. ÉXITO: Redirigimos a la Vista de resultado pasando datos por URL
        header("Location: ../Pages/resultadoEj08.php?precio=$precioFinal&edad=$edad&estudiante=$estudianteValue");
        exit;

    } else {
        // ERROR DE RANGO: Redirigimos al formulario con mensaje
        $msg = urlencode("La edad ingresada ($edad) no es válida para el sistema.");
        header("Location: ../Pages/Ejercicio08.php?Message=$msg");
        exit;
    }
} else {
    // ERROR DE PRESENCIA: No llegaron los campos
    $msg = urlencode("Debe completar todos los campos del formulario.");
    header("Location: ../Paginas/Ejercicio08.php?Message=$msg");
    exit;
}