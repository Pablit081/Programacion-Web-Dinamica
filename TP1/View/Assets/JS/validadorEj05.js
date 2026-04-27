// --- VALIDADOR EJERCICIO 5 ---

document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("formEj05");

    formulario.addEventListener("submit", (evento) => {
        evento.preventDefault();
        let formularioValido = true;

        // Reutilizamos Regex
        const regexTexto = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

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

        // 2. NUEVO: Validar Select (Sexo)
        const selectSexo = document.getElementById("sexo");
        if (selectSexo.value === "") {
            marcarInvalido(selectSexo, "Debe seleccionar una opción.");
            formularioValido = false;
        } else {
            marcarValido(selectSexo);
        }

        // 3. NUEVO: Validar Radio Buttons (Estudios)
        const radiosEstudios = document.getElementsByName("estudios");
        let estudioSeleccionado = false;
        
        radiosEstudios.forEach((radio) => {
            if (radio.checked) {
                estudioSeleccionado = true;
            }
        });

        // Usamos el último radio (que le pusimos la clase .radio-final) para anclar el mensaje de error
        const ultimoRadio = document.querySelector(".radio-final");
        if (!estudioSeleccionado) {
            marcarInvalido(ultimoRadio, "Seleccione su nivel de estudios.");
            formularioValido = false;
        } else {
            marcarValido(ultimoRadio);
        }

        if (formularioValido) {
            formulario.submit();
        }
    });
});