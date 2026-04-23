<?php include_once __DIR__ . '/../Layouts/header.php'; ?>

<div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md mt-8">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-2">Ejercicio 12 - Probador de Funciones</h2>
    <p class="text-gray-600 mb-8 italic">Seleccioná una función para probar sus parámetros en una nueva pestaña.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <div class="border rounded-lg p-5 hover:border-blue-500 transition-colors shadow-sm">
            <h3 class="font-bold text-lg text-gray-800 mb-2">1. Nombre del Mes</h3>
            <p class="text-sm text-gray-600 mb-4">Ingresá un número y obtené el mes en letras.</p>
            <a href="Ejercicio012_darMes.php" class="inline-block bg-[#0054a6] text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition-colors">
                Probar Función
            </a>
        </div>

        <div class="border rounded-lg p-5 hover:border-blue-500 transition-colors shadow-sm">
            <h3 class="font-bold text-lg text-gray-800 mb-2">2. Formato de Fecha</h3>
            <p class="text-sm text-gray-600 mb-4">Convierte una fecha clásica (dd/mm/aaaa) a formato de Base de Datos.</p>
            <a href="Ejercicio012_formatoFecha.php" class="inline-block bg-[#0054a6] text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition-colors">
                Probar Función
            </a>
        </div>

        <div class="border rounded-lg p-5 hover:border-blue-500 transition-colors shadow-sm">
            <h3 class="font-bold text-lg text-gray-800 mb-2">3. Calculadora de IVA</h3>
            <p class="text-sm text-gray-600 mb-4">Ingresá el precio neto de un producto y obtené el detalle con el 21% aplicado.</p>
            <a href="Ejercicio012_calculoIva.php" class="inline-block bg-[#0054a6] text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition-colors">
                Probar Función
            </a>
        </div>

        <div class="border rounded-lg p-5 hover:border-blue-500 transition-colors shadow-sm">
            <h3 class="font-bold text-lg text-gray-800 mb-2">4. Conversor de Moneda</h3>
            <p class="text-sm text-gray-600 mb-4">Ingresá tus pesos y calculá a cuántos dólares equivalen según la cotización del día.</p>
            <a href="Ejercicio012_pesosDolares.php" class="inline-block bg-[#0054a6] text-white px-4 py-2 rounded text-sm hover:bg-blue-700">
                Probar Función
            </a>
        </div>

        <div class="border rounded-lg p-5 hover:border-blue-500 transition-colors shadow-sm">
            <h3 class="font-bold text-lg text-gray-800 mb-2">5. Redondeo Matemático</h3>
            <p class="text-sm text-gray-600 mb-4">Ingresá un número con múltiples decimales y la función lo ajustará a solo dos.</p>
            <a href="Ejercicio012_redondear.php" class="inline-block bg-[#0054a6] text-white px-4 py-2 rounded text-sm hover:bg-blue-700">
                Probar Función
            </a>
        </div>

        <div class="border rounded-lg p-5 hover:border-blue-500 transition-colors shadow-sm">
            <h3 class="font-bold text-lg text-gray-800 mb-2">6. Corrector de Decimales</h3>
            <p class="text-sm text-gray-600 mb-4">Reemplaza las comas por puntos en cualquier cadena de texto para estandarizar números.</p>
            <a href="Ejercicio012_reemplazarComa.php" class="inline-block bg-[#0054a6] text-white px-4 py-2 rounded text-sm hover:bg-blue-700">
                Probar Función
            </a>
        </div>

        <div class="border rounded-lg p-5 hover:border-blue-500 transition-colors shadow-sm">
            <h3 class="font-bold text-lg text-gray-800 mb-2">7. Calculadora de Edad</h3>
            <p class="text-sm text-gray-600 mb-4">Ingresá tu fecha de nacimiento mediante el calendario y obtené tu edad exacta al día de hoy.</p>
            <a href="Ejercicio012_calcularEdad.php" class="inline-block bg-[#0054a6] text-white px-4 py-2 rounded text-sm hover:bg-blue-700">
                Probar Función
            </a>
        </div>

        <div class="border rounded-lg p-5 hover:border-blue-500 transition-colors shadow-sm">
            <h3 class="font-bold text-lg text-gray-800 mb-2">8. Promediador de Conjuntos</h3>
            <p class="text-sm text-gray-600 mb-4">Ingresá una lista de valores numéricos y obtené el promedio aritmético al instante.</p>
            <a href="Ejercicio012_calcularPromedio.php" class="inline-block bg-[#0054a6] text-white px-4 py-2 rounded text-sm hover:bg-blue-700">
                Probar Función
            </a>
        </div>
    
    </div>
</div>

<?php include_once __DIR__ . '/../Layouts/footer.php'; ?>