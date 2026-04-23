<?php 
include_once __DIR__ . '/../Layouts/header.php'; 
include_once 'EjercicioFuncionesVarias.php';

$resultado = null;
if ($_POST) {
    // Tomamos el texto tal cual lo escribió el usuario
    $textoPost = $_POST['texto_ingresado'];
    $resultado = cambiarComaPorPunto($textoPost);
}
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10 border-t-4 border-[#0054a6]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Prueba: Reemplazo de Comas</h2>
        <a href="Ejercicio012.php" class="text-sm text-blue-600 hover:underline flex items-center gap-1">
            ← Volver al Menú
        </a>
    </div>

    <form method="POST" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Ingresá un número o texto con comas:</label>
            <input 
                type="text"
                name="texto_ingresado" required 
                class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500 outline-none"
                placeholder="Ej: 1540,75">
        </div>
        <button type="submit" class="w-full bg-[#0054a6] text-white py-2 rounded font-semibold hover:bg-blue-800 transition-colors">
            Limpiar y Formatear
        </button>
    </form>

    <?php if ($resultado != null): ?>
        <div class="mt-8 flex flex-col gap-4">
            <div class="p-4 bg-red-50 border-l-4 border-red-400 rounded shadow-sm">
                <p class="text-xs text-red-600 uppercase tracking-wide font-bold mb-1">Entrada Original</p>
                <p class="text-lg font-mono text-gray-800"><?php echo $resultado['original']; ?></p>
            </div>
            
            <div class="flex justify-center text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>

            <div class="p-4 bg-green-50 border-l-4 border-green-500 rounded shadow-sm">
                <p class="text-xs text-green-700 uppercase tracking-wide font-bold mb-1">Salida para Base de Datos</p>
                <p class="text-2xl font-mono font-bold text-[#0054a6]"><?php echo $resultado['corregido']; ?></p>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include_once __DIR__ . '/../Layouts/footer.php'; ?>