<?php 
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow border-0">
            <div class="card-header bg-white border-bottom border-[#0054a6] border-3">
                <h4 class="mb-0 text-[#0054a6] fw-bold">Ejercicio 1 - Verificación de Número</h4>
            </div>
            <div class="card-body p-4 bg-light">
                
                <form action="vernumero.php" method="POST" id="formEj01" novalidate>
                    <div class="mb-4">
                        <label for="numero" class="form-label fw-bold">Ingrese un número:</label>
                        <input type="number" class="form-control form-control-lg" id="numero" name="numero">
                        </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #0054a6; border-color: #0054a6;">Verificar Número</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="../Assets/JS/validadorEj01.js"></script>

<?php 
include_once '../Layouts/footer.php'; 
?>