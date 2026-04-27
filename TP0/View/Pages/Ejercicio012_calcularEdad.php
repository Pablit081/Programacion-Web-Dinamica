<?php 
include_once __DIR__ . '/../Layouts/header.php'; 
include_once 'EjercicioFuncionesVarias.php';

$resultado = null;
if ($_POST) {
    // El input type="date" de HTML5 siempre manda la fecha en formato YYYY-MM-DD
    $fechaPost = $_POST['fecha_nacimiento'];
    $resultado = calcularEdad($fechaPost);
}
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10 border-t-4 border-[#0054a6]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Prueba: Calculadora de Edad</h2>
        <a href="Ejercicio012.php" class="text-sm text-blue-600 hover:underline flex items-center gap-1">
            ← Volver al Menú
        </a>
    </div>

    <form method="POST" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Seleccioná la fecha de nacimiento:</label>
            <input
                type="date"
                name="fecha_nacimiento" required 
                max="<?php echo date('Y-m-d'); ?>" 
                class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500 outline-none">
            <p class="text-xs text-gray-500 mt-1">No podés elegir fechas en el futuro.</p>
        </div>
        <button
            type="submit"
            class="w-full bg-[#0054a6] text-white py-2 rounded font-semibold hover:bg-blue-800 transition-colors">
            Calcular Edad
        </button>
    </form>

    <?php if ($resultado != null): ?>
        <div class="mt-8 bg-blue-50 border border-blue-200 rounded p-6 text-center shadow-sm">
            <p class="text-gray-600 mb-2">Según la fecha de nacimiento indicada, la persona tiene:</p>
            <div class="flex items-baseline justify-center gap-2 text-[#0054a6]">
                <span class="text-5xl font-extrabold"><?php echo $resultado['edad_actual']; ?></span>
                <span class="text-xl font-bold uppercase tracking-wide">años</span>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include_once __DIR__ . '/../Layouts/footer.php'; ?>