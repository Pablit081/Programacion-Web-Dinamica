<?php 
include_once '../../Util/funciones.php';
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 text-center">
            <div class="card-body p-5 bg-light">
                
                <?php
                // Verificamos que lleguen los datos por GET
                if (isset($_GET['nombre'], $_GET['edad'])) {
                    $nombre = $_GET['nombre'];
                    $apellido = $_GET['apellido'];
                    $edad = intval($_GET['edad']);
                    $direccion = $_GET['direccion'];

                    // Usamos nuestra lógica del Paso 1
                    $esMayor = esMayorDeEdad($edad);

                    if ($esMayor) {
                        echo "<h1 class='text-success fw-bold'>MAYOR DE EDAD</h1>";
                    } else {
                        echo "<h1 class='text-warning fw-bold'>MENOR DE EDAD</h1>";
                    }

                    echo "<p class='fs-5 mt-3'>Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.</p>";
                }
                ?>

                <div class="alert alert-info mt-4 small">
                    <strong>ATENCION!!!</strong> Mirá la barra de direcciones de tu navegador. 
                    ¡Podés cambiar la edad ahí mismo y apretar Enter para ver cómo cambia el mensaje!
                </div>

                <a href="Ejercicio04.php" class="btn btn-outline-secondary mt-3">Volver</a>
            </div>
        </div>
    </div>
</div>

<?php include_once '../Layouts/footer.php'; ?>