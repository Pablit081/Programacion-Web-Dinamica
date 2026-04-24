<?php include_once '../Layouts/header.php'; ?>

<div class="row justify-content-center w-100">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0">
            <div class="card-header bg-white border-bottom border-[#0054a6] border-3">
                <h4 class="mb-0 text-[#0054a6] fw-bold">Ejercicio 5: Datos Demográficos</h4>
            </div>
            <div class="card-body p-4 bg-light">
                
                <form action="mostrarDatosEj05.php" method="get" id="formEj05" novalidate>
                    
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
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edad" class="form-label fw-bold">Edad:</label>
                            <input type="number" name="edad" id="edad" class="form-control">
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <label for="direccion" class="form-label fw-bold">Dirección:</label>
                            <input type="text" name="direccion" id="direccion" class="form-control">
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="mb-4">
                        <label for="sexo" class="form-label fw-bold">Sexo:</label>
                        <select name="sexo" id="sexo" class="form-select">
                            <option value="">Seleccione una opción...</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Otro">Otro</option>
                            <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                        </select>
                    </div>

                    <fieldset class="mb-4">
                        <legend class="form-label fw-bold fs-6">Nivel de Estudios alcanzado:</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estudios" id="estudios1" value="1">
                            <label class="form-check-label" for="estudios1">No tiene estudios</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estudios" id="estudios2" value="2">
                            <label class="form-check-label" for="estudios2">Estudios Primarios</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input radio-final" type="radio" name="estudios" id="estudios3" value="3">
                            <label class="form-check-label" for="estudios3">Estudios Secundarios</label>
                        </div>
                    </fieldset>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #0054a6;">Enviar y Procesar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../Assets/JS/validadorEj05.js"></script>

<?php include_once '../Layouts/footer.php'; ?>