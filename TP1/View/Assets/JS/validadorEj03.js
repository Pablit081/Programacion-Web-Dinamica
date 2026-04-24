// --- FUNCIONES AUXILIARES (Exactamente como las armó tu profe) ---

function marcarInvalido(input, mensaje) {
    input.classList.remove("is-valid");
    input.classList.add("is-invalid");

    let feedback = input.parentElement.querySelector(".invalid-feedback");

    if (!feedback) {
        feedback = document.createElement("div");
        feedback.classList.add("invalid-feedback");
        input.insertAdjacentElement("afterend", feedback);
    }
    feedback.textContent = mensaje;
}

function marcarValido(input) {
    input.classList.remove("is-invalid");
    input.classList.add("is-valid");
}

// --- LOGICA PRINCIPAL ---

document.addEventListener("DOMContentLoaded", () => {
    // 1. Capturamos el formulario por su nuevo ID
    const formulario = document.getElementById("formEj03");

    // 2. Escuchamos el evento submit
    formulario.addEventListener("submit", (evento) => {
        // Frenamos el envío al servidor
        evento.preventDefault();

        let formularioValido = true;

        // Definimos las Expresiones Regulares del profe
        const regexTexto = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
        // Esta regex de dirección exige "Letras, un espacio, y números" (Ej: "Avenida 123")
        const regexDireccion = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+\s\d+$/; 

        // --- VALIDAR NOMBRE ---
        const inputNombre = document.getElementById("nombre");
        if (!regexTexto.test(inputNombre.value.trim())) {
            marcarInvalido(inputNombre, "El nombre es obligatorio y solo debe contener letras.");
            formularioValido = false;
        } else {
            marcarValido(inputNombre);
        }

        // --- VALIDAR APELLIDO ---
        const inputApellido = document.getElementById("apellido");
        if (!regexTexto.test(inputApellido.value.trim())) {
            marcarInvalido(inputApellido, "El apellido es obligatorio y solo debe contener letras.");
            formularioValido = false;
        } else {
            marcarValido(inputApellido);
        }

        // --- VALIDAR EDAD ---
        const inputEdad = document.getElementById("edad");
        const valorEdad = parseInt(inputEdad.value.trim());
        // Verificamos que no esté vacío, que sea número y que esté entre 1 y 99
        if (isNaN(valorEdad) || valorEdad < 1 || valorEdad > 99) {
            marcarInvalido(inputEdad, "Debe ingresar una edad numérica válida (entre 1 y 99).");
            formularioValido = false;
        } else {
            marcarValido(inputEdad);
        }

        // --- VALIDAR DIRECCION ---
        const inputDireccion = document.getElementById("direccion");
        if (!regexDireccion.test(inputDireccion.value.trim())) {
            marcarInvalido(inputDireccion, "Ingrese una dirección válida (Ej: 'Rivadavia 123').");
            formularioValido = false;
        } else {
            marcarValido(inputDireccion);
        }

        // --- ENVÍO FINAL ---
        if (formularioValido) {
            formulario.submit(); // Liberamos el formulario para que vaya a mostrarSaludo.php
        }
    });
});