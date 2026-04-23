<?php 
// 1. Cargamos el encabezado
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow border-0">
            <div class="card-header bg-white border-bottom border-[#0054a6] border-3">
                <h4 class="mb-0 text-[#0054a6] fw-bold">Ejercicio 1</h4>
            </div>
            <div class="card-body p-4 bg-light">
                
                <form action="vernumero.php" method="POST" class="needs-validation" novalidate>
                    <div class="mb-4">
                        <label for="numero" class="form-label fw-bold">Ingrese un número:</label>
                        <input type="number" class="form-control form-control-lg" id="numero" name="numero" required>
                        
                        <div class="valid-feedback">
                            [cite_start]¡Perfecto! [cite: 552]
                        </div>
                        <div class="invalid-feedback">
                            [cite_start]Por favor, ingresá un número válido. [cite: 537]
                        </div>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #0054a6; border-color: #0054a6;">Verificar Número</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    [cite_start]// Se ejecuta una vez que la página carga por completo [cite: 559]
    (function() {
        'use strict';
        window.addEventListener('DOMContentLoaded', function() {
            // Buscamos todos los formularios que tengan la clase needs-validation [cite: 561]
            var forms = document.getElementsByClassName('needs-validation');
            
            // Iteramos sobre ellos y prevenimos el envío si no son válidos [cite: 563]
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) { [cite: 566]
                        event.preventDefault(); [cite: 568]
                        event.stopPropagation(); [cite: 569]
                    }
                    form.classList.add('was-validated'); [cite: 570]
                }, false);
            });
        }, false);
    })();
</script>

<?php 
// 4. Cargamos el pie de página
include_once '../Layouts/footer.php'; 
?>