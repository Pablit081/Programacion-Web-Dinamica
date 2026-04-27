<?php 
include_once '../../Util/funciones.php';
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 text-center">
            <div class="card-header bg-white border-bottom border-primary border-3">
                <h4 class="mb-0 text-primary fw-bold">Presentación</h4>
            </div>
            <div class="card-body p-4 bg-light">
                
                <?php
                // Validamos que hayamos recibido los datos por POST y que no estén vacíos
                if ($_POST && isset($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['direccion']) &&
                    $_POST['nombre'] !== "" && $_POST['apellido'] !== "" && $_POST['edad'] !== "" && $_POST['direccion'] !== "") {
                    
                    // Capturamos las variables
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $edad = $_POST['edad'];
                    $direccion = $_POST['direccion'];
                    
                    // Llamamos a la función
                    $mensaje = generarSaludo($nombre, $apellido, $edad, $direccion);
                    
                    // Mostramos el resultado
                    echo "<div class='alert alert-success fs-5 py-4' role='alert'>";
                    echo "<strong>$mensaje</strong>";
                    echo "</div>";
                    
                } else {
                    // El usuario evadió los controles o ingresó directo por URL
                    echo "<div class='alert alert-danger fw-bold' role='alert'>ERROR: Faltan completar datos en el formulario.</div>";
                }
                ?>

                <div class="mt-4">
                    <a href="Ejercicio03.php" class="btn btn-outline-secondary">Volver al Formulario</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include_once '../Layouts/footer.php'; 
?>