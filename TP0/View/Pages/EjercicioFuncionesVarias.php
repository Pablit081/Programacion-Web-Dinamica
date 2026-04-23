<?php
/**
 * Ejercicio 12 - Funciones Varias
 */

// 1. Función darMes($numero)
function darMes($numero) {
    $meses = [
        1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril",
        5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto",
        9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
    ];

    // Verificamos si el número existe en nuestro array
    if (isset($meses[$numero])) {
        return $meses[$numero];
    } else {
        return "Número de mes inválido (debe ser de 1 a 12)";
    }
}

// 2. Función formatearFecha($fecha)
// Ingresa: dd/mm/aaaa -> Sale: aaaa-mm-dd
function formatearFecha($fechaIngresada) {
    // La función explode() rompe un string en pedazos usando un separador (la barra '/')
    // y convierte esos pedazos en un array.
    $partes = explode('/', $fechaIngresada);
    
    // Verificamos que el array tenga exactamente 3 partes (día, mes, año)
    if (count($partes) == 3) {
        $dia = $partes[0];
        $mes = $partes[1];
        $anio = $partes[2];
        
        // Armamos el nuevo string concatenando con guiones
        return $anio . '-' . $mes . '-' . $dia;
    } else {
        return "Error: Asegurate de usar el formato exacto dd/mm/aaaa";
    }
}

// 3. Función calcularIva()
// Calcula el IVA y devuelve un array con el detalle completo.
// 3. Función calcularIva()
// Ahora acepta el porcentaje como segundo parámetro opcional.
function calcularIva($monto, $porcentaje = 21) {
    // Si el usuario deja el campo vacío, PHP usará automáticamente el 21
    $montoIva = $monto * ($porcentaje / 100);
    $precioFinal = $monto + $montoIva;
    
    return [
        'base' => $monto,
        'porcentaje' => $porcentaje,
        'iva' => $montoIva,
        'total' => $precioFinal
    ];
}

// 4. Función pesosADolares()
// Convierte pesos a dólares. La cotización es opcional (por defecto 1000).
function pesosADolares($montoPesos, $cotizacion = 1000) {
    // Evitamos la división por cero por seguridad
    if ($cotizacion <= 0) {
        $cotizacion = 1000;
    }
    
    $dolares = $montoPesos / $cotizacion;
    
    // Devolvemos el array con el resumen de la operación
    return [
        'pesos_ingresados' => $montoPesos,
        'valor_cotizacion' => $cotizacion,
        'total_dolares' => $dolares
    ];
}

// 5. Función redondearNumero()
// Recibe un número con muchos decimales y lo redondea matemáticamente a 2.
function redondearNumero($numero) {
    // round(numero, cantidad_de_decimales)
    $numeroRedondeado = round($numero, 2);
    
    // Devolvemos un array para que la Vista pueda mostrar el "Antes y Después"
    return [
        'original' => $numero,
        'redondeado' => $numeroRedondeado
    ];
}

// 6. Función cambiarComaPorPunto()
// Recibe un string (que puede ser un número con coma) y reemplaza las comas por puntos.
function cambiarComaPorPunto($texto) {
    // La función str_replace pide 3 parámetros:
    // str_replace("lo_que_busco", "por_lo_que_reemplazo", $texto_original)
    $textoCorregido = str_replace(',', '.', $texto);
    
    return [
        'original' => $texto,
        'corregido' => $textoCorregido
    ];
}

// 7. Función calcularEdad()
// Recibe una fecha en formato YYYY-MM-DD y calcula la edad exacta al día de hoy.
function calcularEdad($fechaNacimiento) {
    // Convertimos el string que llega del formulario a un "Objeto de Fecha" de PHP
    $fechaNac = new DateTime($fechaNacimiento);
    
    // Obtenemos la fecha exacta del servidor en este momento
    $hoy = new DateTime();
    
    // La función diff() compara las dos fechas y devuelve un objeto con la diferencia exacta.
    // Al pedirle la propiedad 'y' (years), nos da los años enteros transcurridos.
    $edad = $hoy->diff($fechaNac)->y;
    
    return [
        'fecha_ingresada' => $fechaNacimiento,
        'edad_actual' => $edad
    ];
}

// 8. Función calcularPromedio()
// Recibe un array de números y devuelve el promedio matemático.
function calcularPromedio($arrayNumeros) {
    // Verificamos que el array no esté vacío para evitar el error de división por cero
    if (empty($arrayNumeros)) {
        return 0;
    }
    
    $suma = array_sum($arrayNumeros);
    $cantidad = count($arrayNumeros);
    
    return $suma / $cantidad;
}

?>