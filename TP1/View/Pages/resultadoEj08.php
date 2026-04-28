<?php 
include_once '../Layouts/header.php'; 
$datos = $_GET;  
?>

<div class="row justify-content-center w-100">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow border-0 text-center">
            <div class="card-header bg-dark text-white border-bottom border-warning border-3">
                <h4 class="mb-0 fw-bold">Ticket Cinem@s</h4>
            </div>
            <div class="card-body p-5 bg-light">
                
                <h5 class='text-muted mb-3'>Valor de la entrada:</h5>
                <h1 class='display-3 text-success fw-bold mb-4'>$<?php echo $datos['precio'] ?? '0'; ?></h1>
                
                <div class='alert alert-secondary small'>
                    Cálculo basado en: <strong><?php echo $datos['edad'] ?? '0'; ?> años</strong> 
                    y condición de estudiante: <strong><?php echo strtoupper($datos['estudiante'] ?? 'N/A'); ?></strong>.
                </div>

                <a href="Ejercicio08.php" class="btn btn-outline-dark mt-3 w-100">Volver al cotizador</a>
            </div>
        </div>
    </div>
</div>

<?php include_once '../Layouts/footer.php'; ?>