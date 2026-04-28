document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("formEj08");

    formulario.addEventListener("submit", (evento) => {
        evento.preventDefault();
        let formularioValido = true;

        // 1. VALIDAR EDAD
        const inputEdad = document.getElementById("edad");
        const valorEdad = parseInt(inputEdad.value.trim());
        
        if (isNaN(valorEdad) || valorEdad < 1 || valorEdad > 99) {
            marcarInvalido(inputEdad, "Ingrese una edad válida (1 a 99).");
            formularioValido = false;
        } else {
            marcarValido(inputEdad);
        }

        // 2. VALIDAR RADIO BUTTONS (Estudiante)
        const radiosEstudiante = document.getElementsByName("estudiante");
        let opcionSeleccionada = false;
        
        radiosEstudiante.forEach((radio) => {
            if (radio.checked) {
                opcionSeleccionada = true;
            }
        });

        const ultimoRadio = document.querySelector(".radio-final");
        if (!opcionSeleccionada) {
            marcarInvalido(ultimoRadio, "Indique si es estudiante o no.");
            formularioValido = false;
        } else {
            marcarValido(ultimoRadio);
        }

        // 3. ENVÍO
        if (formularioValido) {
            formulario.submit();
        }
    });

    // EXTRA: Limpieza visual al presionar el botón "Limpiar Formulario"
    formulario.addEventListener("reset", () => {
        const inputs = formulario.querySelectorAll(".is-valid, .is-invalid");
        inputs.forEach(input => {
            input.classList.remove("is-valid", "is-invalid");
        });
        const feedbacks = formulario.querySelectorAll(".invalid-feedback");
        feedbacks.forEach(feedback => feedback.remove());
    });
});