// Funcion encargada de pintar de rojo y crear el mensaje de error
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

// Funcion encargada de pintar de verde
function marcarValido(input) {
    input.classList.remove("is-invalid");
    input.classList.add("is-valid");
}