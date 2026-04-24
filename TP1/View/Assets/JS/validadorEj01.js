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