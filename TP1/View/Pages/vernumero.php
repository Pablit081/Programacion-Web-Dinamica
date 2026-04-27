<?php 
// 1. Incluimos tu nuevo archivo de funciones. 
// Atento a la ruta: subimos dos niveles (Pages -> View -> TP1) y entramos a Util
include_once '../../Util/funciones.php';

// 2. Cargamos el encabezado para mantener el diseño visual
include_once '../Layouts/header.php'; 
?>

<div class="row justify-content-center w-100">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow border-0">
            <div class="card-header bg-white border-bottom border-primary border-3">
                <h4 class="mb-0 text-primary fw-bold">Resultado del Análisis</h4>
            </div>
            <div class="card-body p-4 bg-light text-center">
                
                <?php
                // Verificamos si los datos llegaron por el método POST
                if ($_POST) {
                    
                    // Validación del lado del servidor. 
                    // Chequeamos que exista y que no sea una cadena vacía.
                    if (isset($_POST['numero']) && $_POST['numero'] !== "") {
                        
                        // Capturamos el valor enviado desde el formulario
                        $numeroIngresado = $_POST['numero'];
                        
                        $resultado = evaluarNumero($numeroIngresado);
                        
                        // Mostramos el cartel de Bootstrap según el resultado
                        if ($resultado == "POSITIVO") {
                            echo "<div class='alert alert-success fw-bold' role='alert'>El número ingresado ($numeroIngresado) es POSITIVO.</div>";
                        } elseif ($resultado == "NEGATIVO") {
                            echo "<div class='alert alert-danger fw-bold' role='alert'>El número ingresado ($numeroIngresado) es NEGATIVO.</div>";
                        } else {
                            echo "<div class='alert alert-warning fw-bold' role='alert'>El número ingresado es CERO.</div>";
                        }
                        
                    } else {
                        // El guardia de seguridad atrapó el dato vacío
                        echo "<div class='alert alert-danger fw-bold' role='alert'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='Warning:'>
                                  <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                                </svg>
                                ERROR: No se ingresó ningún número o el dato no es válido.
                              </div>";
                    }

                } else {
                    // Si alguien entra a esta página directamente sin pasar por el formulario
                    echo "<div class='alert alert-secondary' role='alert'>No se recibieron datos para analizar.</div>";
                }
                ?>

                <div class="mt-4">
                    <a href="Ejercicio01.php" class="btn btn-outline-secondary">
                        Volver al formulario
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php 
// 3. Cargamos el pie de página
include_once '../Layouts/footer.php'; 
?>