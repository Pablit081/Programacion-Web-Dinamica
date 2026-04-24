// --- FUNCIONES DE ESTILO (Siguiendo la plantilla del profe) ---

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

// --- LÓGICA DEL EJERCICIO 1 ---

document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("formEj01");

    formulario.addEventListener("submit", (evento) => {
        // Frenamos el envío automático
        evento.preventDefault();

        let formularioValido = true;
        const inputNumero = document.getElementById("numero");
        
        // Regex para números: permite signo negativo opcional, dígitos, y decimal opcional
        const regexNumero = /^-?\d+(\.\d+)?$/;

        if (!regexNumero.test(inputNumero.value.trim())) {
            marcarInvalido(inputNumero, "Debe ingresar un número válido (ej: 5, -10 o 3.5).");
            formularioValido = false;
        } else {
            marcarValido(inputNumero);
        }

        // Si el guardia da el OK, enviamos de verdad
        if (formularioValido) {
            formulario.submit();
        }
    });
});