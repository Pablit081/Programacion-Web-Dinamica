<?php 
include_once __DIR__ . '/../Layouts/header.php'; 
include_once 'EjercicioFuncionesVarias.php';

$resultado = null;
$cantidadElementos = 0;

if ($_POST) {
    // 1. Tomamos el string (ej: "10, 20, 30")
    $input = $_POST['lista_numeros'];
    
    // 2. Usamos explode para convertirlo en array
    // Cortamos cada vez que haya una coma
    $arrayCrudo = explode(',', $input);
    
    // 3. Limpiamos espacios y aseguramos que sean números (limpieza de datos)
    $arrayFinal = [];
    foreach ($arrayCrudo as $valor) {
        $valorLimpio = trim($valor); // Saca espacios en blanco
        if (is_numeric($valorLimpio)) {
            $arrayFinal[] = floatval($valorLimpio);
        }
    }
    
    $cantidadElementos = count($arrayFinal);
    $resultado = calcularPromedio($arrayFinal);
}
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10 border-t-4 border-[#0054a6]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Prueba: Promediador de Valores</h2>
        <a href="Ejercicio012.php" class="text-sm text-blue-600 hover:underline flex items-center gap-1">
            ← Volver al Menú
        </a>
    </div>

    <form method="POST" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Ingresá los números separados por comas:</label>
            <input 
                type="text"
                name="lista_numeros" required 
                class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500 outline-none"
                placeholder="Ej: 10, 8.5, 20, 45">
            <p class="text-xs text-gray-500 mt-1">Podés usar puntos para los decimales (ej: 7.5).</p>
        </div>
        <button 
            type="submit"
            class="w-full bg-[#0054a6] text-white py-2 rounded font-semibold hover:bg-blue-800 transition-colors">
            Calcular Promedio
        </button>
    </form>

    <?php if ($resultado !== null): ?>
        <div class="mt-8 p-6 bg-green-50 border border-green-200 rounded shadow-sm text-center">
            <p class="text-green-700 font-medium mb-1">Se analizaron <?php echo $cantidadElementos; ?> valores</p>
            <h3 class="text-gray-500 uppercase text-xs font-bold tracking-widest">El promedio es:</h3>
            <span class="text-5xl font-black text-[#0054a6]">
                <?php echo number_format($resultado, 2, ',', '.'); ?>
            </span>
        </div>
    <?php endif; ?>
</div>

<?php include_once __DIR__ . '/../Layouts/footer.php'; ?>