<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD - Facultad de Informática (UNCO)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Un toque personalizado para mantener el azul de la UNCO */
        .bg-unco { background-color: #0054a6 !important; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-unco shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="https://www.uncoma.edu.ar/" target="_blank" title="Visitar web de la UNCO">
                    FAI <span class="fw-light text-white-50">| UNCO</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <span class="navbar-text text-white fw-bold mx-auto">
                        TRABAJOS PRÁCTICOS
                    </span>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="TP1_PHPHTML_20.pdf" target="_blank">Inicio (Ver TP)</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="ejerciciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ejercicios
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="ejerciciosDropdown">
                                <?php
                                // Generamos los 8 links dinámicamente según la cantidad de ejercicios del TP1
                                for ($i = 1; $i <= 8; $i++) {
                                    echo "<li><a class='dropdown-item' href='Ejercicio0{$i}.php'>Ejercicio {$i}</a></li>";
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5 flex-grow-1 d-flex flex-column justify-content-center">