<?php 
include_once '../../Util/funciones.php';
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 text-center">
            <div class="card-header bg-white border-bottom border-[#0054a6] border-3">
                <h4 class="mb-0 text-[#0054a6] fw-bold">Ficha Personal</h4>
            </div>
            <div class="card-body p-5 bg-light">
                
                <?php
                if (isset($_GET['nombre'], $_GET['edad'], $_GET['estudios'], $_GET['sexo'])) {
                    $nombre = htmlspecialchars($_GET['nombre']);
                    $apellido = htmlspecialchars($_GET['apellido']);
                    $edad = intval($_GET['edad']);
                    $direccion = htmlspecialchars($_GET['direccion']);
                    $codigoEstudios = $_GET['estudios'];
                    $sexo = htmlspecialchars($_GET['sexo']);

                    // 1. Usamos la lógica del Ej 4 para la mayoría de edad
                    $esMayor = esMayorDeEdad($edad);
                    
                    // 2. Usamos la nueva lógica del Ej 5 para los estudios
                    $textoEstudios = obtenerTextoEstudios($codigoEstudios);

                    if ($esMayor) {
                        echo "<span class='badge bg-success mb-3'>Mayor de edad</span>";
                    } else {
                        echo "<span class='badge bg-warning text-dark mb-3'>Menor de edad</span>";
                    }

                    // 3. Imprimimos el mensaje final estructurado
                    echo "<p class='fs-5 mt-3'>Hola, yo soy <strong>$nombre $apellido</strong>, tengo $edad años y vivo en $direccion.</p>";
                    
                    echo "<div class='alert alert-secondary text-start mt-4'>";
                    echo "<h5 class='fw-bold border-bottom pb-2'>Perfil Adicional:</h5>";
                    echo "<ul class='mb-0'>";
                    echo "<li><strong>Identidad de género:</strong> $sexo</li>";
                    echo "<li><strong>Nivel de educación:</strong> " . ucfirst($textoEstudios) . "</li>";
                    echo "</ul>";
                    echo "</div>";

                } else {
                    echo "<div class='alert alert-danger'>ERROR: Datos incompletos. Vuelva al formulario.</div>";
                }
                ?>

                <a href="Ejercicio05.php" class="btn btn-outline-secondary mt-3">Volver</a>
            </div>
        </div>
    </div>
</div>

<?php include_once '../Layouts/footer.php'; ?>