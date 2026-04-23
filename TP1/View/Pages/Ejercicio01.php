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
                            ¡Perfecto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingresá un número válido.
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
    // Se ejecuta una vez que la página carga por completo
    (function() {
        'use strict';
        window.addEventListener('DOMContentLoaded', function() {
            // Buscamos todos los formularios que tengan la clase needs-validation
            var forms = document.getElementsByClassName('needs-validation');
            
            // Iteramos sobre ellos y prevenimos el envío si no son válidos
            var validation = Array.prototype.filter.call(forms, function(form) {
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
// 4. Cargamos el pie de página
include_once '../Layouts/footer.php'; 
?>