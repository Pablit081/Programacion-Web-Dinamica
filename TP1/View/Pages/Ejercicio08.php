<?php include_once '../Layouts/header.php'; ?>

<div class="row justify-content-center w-100">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow border-0">
            <div class="card-header bg-white border-bottom border-[#0054a6] border-3">
                <h4 class="mb-0 text-[#0054a6] fw-bold">Ejercicio 8: Tarifas Cinem@s</h4>
            </div>
            <div class="card-body p-4 bg-light">
                
                <form action="../Action/procesarEj08.php" method="POST" id="formEj08" novalidate>
                    
                    <div class="mb-4">
                        <label for="edad" class="form-label fw-bold">Ingrese su edad:</label>
                        <input type="number" name="edad" id="edad" class="form-control">
                    </div>

                    <fieldset class="mb-4">
                        <legend class="form-label fw-bold fs-6">¿Es estudiante?</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estudiante" id="estudianteSi" value="si">
                            <label class="form-check-label" for="estudianteSi">Sí, soy estudiante</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input radio-final" type="radio" name="estudiante" id="estudianteNo" value="no">
                            <label class="form-check-label" for="estudianteNo">No soy estudiante</label>
                        </div>
                    </fieldset>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #0054a6;">Calcular Tarifa</button>
                        <button type="reset" class="btn btn-outline-secondary">Limpiar Formulario</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="../Assets/JS/validadorEj08.js"></script>

<?php include_once '../Layouts/footer.php'; ?>