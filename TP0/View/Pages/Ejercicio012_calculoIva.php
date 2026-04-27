<?php 
include_once __DIR__ . '/../Layouts/header.php'; 
include_once 'EjercicioFuncionesVarias.php';

$resultado = null;
if ($_POST) {
    $precio = floatval($_POST['precio']);
    
    // Verificamos si el usuario ingresó algo en el porcentaje
    if (!empty($_POST['porcentaje'])) {
        $ivaIngresado = floatval($_POST['porcentaje']);
        // Llamamos a la función con AMBOS parámetros
        $resultado = calcularIva($precio, $ivaIngresado);
    } else {
        // Llamamos a la función solo con el monto (usará el 21% por defecto)
        $resultado = calcularIva($precio);
    }
}
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10 border-t-4 border-[#0054a6]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Prueba: Cálculo de IVA</h2>
        <a href="Ejercicio012.php" class="text-sm text-blue-600 hover:underline">← Volver al Menú</a>
    </div>

    <form method="POST" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Monto ($):</label>
                <input
                    type="number"
                    step="0.01"
                    name="precio" required 
                    class="w-full p-2 border rounded outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Ej: 1500.50">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Porcentaje % (Opcional):</label>
                <input
                    type="number"
                    step="0.1"
                    name="porcentaje" 
                    class="w-full p-2 border rounded outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Por defecto: 21">
            </div>
        </div>
        <button type="submit" class="w-full bg-[#0054a6] text-white py-2 rounded font-semibold hover:bg-blue-800 transition-colors">
            Calcular IVA
        </button>
    </form>

    <?php if ($resultado): ?>
        <div class="mt-8 p-5 bg-gray-50 border rounded shadow-sm">
            <h4 class="font-bold text-gray-700 mb-3 border-b pb-2">Resultado del Cálculo</h4>
            <div class="space-y-2">
                <p class="flex justify-between text-gray-600 italic">
                    <span>Monto Base:</span> 
                    <span>$<?php echo number_format($resultado['base'], 2, ',', '.'); ?></span>
                </p>
                <p class="flex justify-between text-gray-600">
                    <span>IVA Aplicado (<?php echo $resultado['porcentaje']; ?>%):</span> 
                    <span>$<?php echo number_format($resultado['iva'], 2, ',', '.'); ?></span>
                </p>
                <div class="border-t pt-2 flex justify-between font-bold text-xl text-[#0054a6]">
                    <span>Total Final:</span>
                    <span>$<?php echo number_format($resultado['total'], 2, ',', '.'); ?></span>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include_once __DIR__ . '/../Layouts/footer.php'; ?>