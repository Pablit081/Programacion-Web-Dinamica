<?php 
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0">
            <div class="card-header bg-white border-bottom border-primary border-3">
                <h4 class="mb-0 text-primary fw-bold">Ejercicio 2: Horas de Cursada (PWD)</h4>
            </div>
            <div class="card-body p-4 bg-light">
                <p class="text-muted small mb-4">Ingrese las horas de cursada para cada día de la semana.</p>
                
                <form action="procesarHoras.php" method="get" class="needs-validation" novalidate>
                    <?php
                    $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
                    foreach ($dias as $dia) {
                        echo "
                        <div class='mb-3 row align-items-center'>
                            <label class='col-sm-4 col-form-label fw-bold'>$dia:</label>
                            <div class='col-sm-8'>
                                <input type='number' name='horas[]' class='form-control' min='0' max='24' step='0.5' required>
                                <div class='invalid-feedback'>Ingrese un valor entre 0 y 24.</div>
                            </div>
                        </div>";
                    }
                    ?>
                    
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary btn-lg">Calcular Total Semanal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Script de validación de Bootstrap
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<?php 
include_once '../Layouts/footer.php'; 
?>