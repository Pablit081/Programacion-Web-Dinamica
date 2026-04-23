<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD - Facultad de Informática (UNCO)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="https://uncoma.edu.ar/">
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <header class="bg-[#0054a6] text-white shadow-md">
        <nav class="container mx-auto px-4 py-3 flex flex-wrap justify-between items-center">

            <div class="flex items-center space-x-2">
                <span class="text-xl font-bold tracking-tight">FAI <span class="font-light text-gray-300">|
                        <a href="https://www.uncoma.edu.ar/" target="_blank" class="hover:text-white transition-colors" title="Visitar web de la UNCO">UNCO</a></span></span>
            </div>

            <div class="flex items-center space-x-6">
                <span class="text-xl font-bold tracking-tight">TRABAJOS PRACTICOS</span>
            </div>

            <div class="flex items-center space-x-6">
                <a href="TP1_RepasoPHP.pdf" target="_blank" class="hover:text-gray-300 transition-colors font-medium" title="Ver Trabajo Práctico (PDF)">Inicio (Ver TP)</a>

                <div class="relative group">
                    <button
                        class="flex items-center space-x-1 hover:text-gray-300 transition-colors font-medium focus:outline-none">
                        <span>Ejercicios
                        </span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <div
                        class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-200">
                        <div class="grid grid-cols-1 py-1">
                            <?php
                            // Generamos los 12 links dinámicamente
                            for ($i = 1; $i <= 12; $i++) {
                                echo "<a href='Ejercicio0{$i}.php' class='px-4 py-2 text-sm hover:bg-blue-50 hover:text-[#0054a6] transition-colors'>Ejercicio{$i}</a>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8 flex-grow">