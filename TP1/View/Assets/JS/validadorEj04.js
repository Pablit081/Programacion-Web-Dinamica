// --- VALIDADOR EJERCICIO 4 ---

document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("formEj04");

    formulario.addEventListener("submit", (evento) => {
        evento.preventDefault();
        let formularioValido = true;

        const regexTexto = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

        // Validar Nombre
        const inputNombre = document.getElementById("nombre");
        if (!regexTexto.test(inputNombre.value.trim())) {
            marcarInvalido(inputNombre, "Ingrese un nombre válido.");
            formularioValido = false;
        } else { marcarValido(inputNombre); }

        // Validar Edad (Debe ser un número positivo)
        const inputEdad = document.getElementById("edad");
        const edadValue = parseInt(inputEdad.value);
        if (isNaN(edadValue) || edadValue < 0 || edadValue > 99) {
            marcarInvalido(inputEdad);
            formularioValido = false;
        } else { marcarValido(inputEdad); }

        if (formularioValido) {
            formulario.submit();
        }
    });
});


function newFunction(inputEdad) {
    marcarInvalido(inputEdad, "Ingrese una edad real (0-99).");
}