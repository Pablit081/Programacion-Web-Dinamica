<?php 
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0">
            <div class="card-header bg-white border-bottom border-primary border-3">
                <h4 class="mb-0 text-primary fw-bold">Ejercicio 3: Formulario de Datos</h4>
            </div>
            <div class="card-body p-4 bg-light">
                
                <form action="mostrarSaludo.php" method="POST" class="needs-validation" novalidate>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label fw-bold">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                            <div class="invalid-feedback">Por favor, ingrese un nombre.</div>
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <label for="apellido" class="form-label fw-bold">Apellido:</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" required>
                            <div class="invalid-feedback">Por favor, ingrese un apellido.</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label fw-bold">Edad:</label>
                        <input type="number" name="edad" id="edad" class="form-control" min="1" max="99" required>
                        <div class="invalid-feedback">Ingrese una edad válida (entre 1 y 99).</div>
                    </div>

                    <div class="mb-4">
                        <label for="direccion" class="form-label fw-bold">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" required>
                        <div class="invalid-feedback">Por favor, ingrese su dirección.</div>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar Datos</button>
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