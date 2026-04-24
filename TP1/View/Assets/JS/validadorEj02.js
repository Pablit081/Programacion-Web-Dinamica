// --- FUNCIONES AUXILIARES (Plantilla de la cátedra) ---
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

// --- LÓGICA PARA ARREGLOS DE INPUTS ---
document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("formEj02");

    formulario.addEventListener("submit", (evento) => {
        evento.preventDefault();
        let formularioValido = true;

        // Capturamos todos los inputs que se llaman horas[]
        const inputsHoras = document.getElementsByName('horas[]');

        // Recorremos el arreglo de inputs
        inputsHoras.forEach((input) => {
            const valor = input.value.trim();
            const horas = parseFloat(valor);

            // Validamos: que no esté vacío y que esté entre 0 y 24
            if (valor === "" || isNaN(horas) || horas < 0 || horas > 24) {
                marcarInvalido(input, "Ingrese un número entre 0 y 24.");
                formularioValido = false;
            } else {
                marcarValido(input);
            }
        });

        if (formularioValido) {
            formulario.submit();
        }
    });
});