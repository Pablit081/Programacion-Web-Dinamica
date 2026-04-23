<?php 
include_once __DIR__ . '/../Layouts/header.php'; 
include_once 'EjercicioFuncionesVarias.php';

$resultado = null;
if ($_POST) {
    $pesos = floatval($_POST['pesos']);
    
    // Verificamos si el usuario ingresó una cotización manual
    if (!empty($_POST['cotizacion'])) {
        $cotizacionManual = floatval($_POST['cotizacion']);
        $resultado = pesosADolares($pesos, $cotizacionManual);
    } else {
        $resultado = pesosADolares($pesos); // Usa la de por defecto
    }
}
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10 border-t-4 border-[#0054a6]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Prueba: Conversor a Dólares</h2>
        <a href="Ejercicio012.php" class="text-sm text-blue-600 hover:underline">← Volver al Menú</a>
    </div>

    <form method="POST" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Monto en Pesos ($):</label>
                <input
                    type="number"
                    step="0.01"
                    name="pesos" required min="1"
                    class="w-full p-2 border rounded outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Ej: 50000">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Cambio (Opcional):</label>
                <input
                    type="number"
                    step="0.01"
                    name="cotizacion" 
                    class="w-full p-2 border rounded outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Por defecto: $1000">
            </div>
        </div>
        <button type="submit" class="w-full bg-[#0054a6] text-white py-2 rounded font-semibold hover:bg-blue-800 transition-colors">
            Convertir Moneda
        </button>
    </form>

    <?php if ($resultado): ?>
        <div class="mt-8 p-5 bg-gray-50 border rounded shadow-sm">
            <h4 class="font-bold text-gray-700 mb-3 border-b pb-2">Ticket de Cambio</h4>
            <div class="space-y-2">
                <p class="flex justify-between text-gray-600">
                    <span>Pesos a convertir:</span> 
                    <span>ARS $<?php echo number_format($resultado['pesos_ingresados'], 2, ',', '.'); ?></span>
                </p>
                <p class="flex justify-between text-gray-600 italic">
                    <span>Cotización utilizada:</span> 
                    <span>$<?php echo number_format($resultado['valor_cotizacion'], 2, ',', '.'); ?></span>
                </p>
                <div class="border-t pt-3 mt-2 flex justify-between font-bold text-2xl text-green-700 items-center">
                    <span>Total Dólares:</span>
                    <span class="bg-green-100 px-3 py-1 rounded">
                        USD $<?php echo number_format($resultado['total_dolares'], 2, '.', ','); ?>
                    </span>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include_once __DIR__ . '/../Layouts/footer.php'; ?>