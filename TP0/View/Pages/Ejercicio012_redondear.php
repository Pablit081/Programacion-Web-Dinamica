<?php 
include_once __DIR__ . '/../Layouts/header.php'; 
include_once 'EjercicioFuncionesVarias.php';

$resultado = null;
if ($_POST) {
    // Usamos floatval para asegurarnos de que PHP lo trate como un número real
    $numeroIngresado = floatval($_POST['numero_decimal']);
    $resultado = redondearNumero($numeroIngresado);
}
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10 border-t-4 border-[#0054a6]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Prueba: Redondeo de Decimales</h2>
        <a href="Ejercicio012.php" class="text-sm text-blue-600 hover:underline">← Volver al Menú</a>
    </div>

    <form method="POST" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Ingresá un número con muchos decimales:</label>
            <input
                type="number"
                step="any"
                name="numero_decimal" required 
                class="w-full p-2 border rounded outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Ej: 145.8976452">
        </div>
        <button type="submit" class="w-full bg-[#0054a6] text-white py-2 rounded font-semibold hover:bg-blue-800 transition-colors">
            Aplicar Redondeo
        </button>
    </form>

    <?php if ($resultado): ?>
        <div class="mt-8 grid grid-cols-2 gap-4">
            <div class="p-4 bg-gray-50 border border-gray-200 rounded text-center shadow-sm">
                <p class="text-xs text-gray-500 uppercase tracking-wide font-bold mb-1">Número Original</p>
                <p class="text-lg text-gray-700 break-all"><?php echo $resultado['original']; ?></p>
            </div>
            <div class="p-4 bg-blue-50 border-2 border-blue-200 rounded text-center shadow-sm">
                <p class="text-xs text-blue-600 uppercase tracking-wide font-bold mb-1">Redondeado a 2</p>
                <p class="text-2xl font-bold text-[#0054a6]"><?php echo $resultado['redondeado']; ?></p>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include_once __DIR__ . '/../Layouts/footer.php'; ?>