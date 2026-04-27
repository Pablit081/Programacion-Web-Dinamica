<?php 
include_once __DIR__ . '/../Layouts/header.php'; 
include_once 'EjercicioFuncionesVarias.php';

$resultado = "";
if ($_POST) {
    $fechaPost = trim($_POST['fecha_ingresada']); // trim() limpia espacios en blanco accidentales
    $resultado = formatearFecha($fechaPost);
}
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10 border-t-4 border-[#0054a6]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Prueba: Formato de Fecha</h2>
        <a href="Ejercicio012.php" class="text-sm text-blue-600 hover:underline flex items-center gap-1">
            ← Volver al Menú
        </a>
    </div>

    <form method="POST" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Ingresá una fecha (dd/mm/aaaa):</label>
            <input
                type="text"
                name="fecha_ingresada"
                required 
                class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500 outline-none"
                placeholder="Ejemplo: 25/05/1810">
        </div>
        <button type="submit" class="w-full bg-[#0054a6] text-white py-2 rounded font-semibold hover:bg-blue-800 transition-colors">
            Convertir a formato Base de Datos
        </button>
    </form>

    <?php if ($resultado != ""): ?>
        <div class="mt-8 p-4 bg-blue-50 border-l-4 border-blue-500 rounded">
            <p class="text-sm text-blue-700 font-semibold uppercase tracking-wider">Resultado (aaaa-mm-dd):</p>
            <p class="text-2xl font-bold text-gray-800 font-mono mt-1"><?php echo $resultado; ?></p>
        </div>
    <?php endif; ?>
</div>

<?php include_once __DIR__ . '/../Layouts/footer.php'; ?>