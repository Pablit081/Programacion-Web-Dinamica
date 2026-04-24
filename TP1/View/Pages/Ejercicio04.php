<?php 
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0">
            <div class="card-header bg-white border-bottom border-[#0054a6] border-3">
                <h4 class="mb-0 text-[#0054a6] fw-bold">Ejercicio 4: Control de Acceso</h4>
            </div>
            <div class="card-body p-4 bg-light">
                
                <form action="mostrarEdad.php" method="get" id="formEj04" novalidate>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label fw-bold">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <label for="apellido" class="form-label fw-bold">Apellido:</label>
                            <input type="text" name="apellido" id="apellido" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label fw-bold">Edad:</label>
                        <input type="number" name="edad" id="edad" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label for="direccion" class="form-label fw-bold">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control">
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #0054a6;">Verificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../Assets/JS/validadorEj04.js"></script>

<?php 
include_once '../Layouts/footer.php'; 
?>