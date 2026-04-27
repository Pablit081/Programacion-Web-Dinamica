<?php 
include_once '../../Util/funciones.php';
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-6">
        <div class="card shadow border-0 text-center">
            <div class="card-header bg-white border-bottom border-primary border-3">
                <h4 class="mb-0 text-primary fw-bold">Resultado de Cursada</h4>
            </div>
            <div class="card-body p-4 bg-light">
                
                <?php
                // Verificamos si llegaron datos por GET
                if (isset($_GET['horas'])) {
                    // PHP automáticamente convierte 'horas[]' en un array unidimensional
                    $arregloHoras = $_GET['horas'];
                    
                    // Llamamos a la función de tu carpeta Util
                    $total = calcularTotalHoras($arregloHoras);
                    
                    echo "<div class='alert alert-info py-4'>";
                    echo "<h2 class='display-4 fw-bold mb-0'>$total hs</h2>";
                    echo "<p class='mb-0'>cursadas por semana en PWD</p>";
                    echo "</div>";
                    
                    echo "<p class='text-muted small'>Datos recibidos (URL): " . $_SERVER['QUERY_STRING'] . "</p>";
                } else {
                    echo "<div class='alert alert-warning'>No se recibieron datos de horas.</div>";
                }
                ?>

                <div class="mt-4">
                    <a href="Ejercicio02.php" class="btn btn-outline-secondary">Volver al Formulario</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include_once '../Layouts/footer.php'; 
?>