
// Ventanas modales
var modals = document.querySelectorAll(".modal, div.formModal");

// Botones que abren las ventanas modales
var botones = document.querySelectorAll(".abrirModal");

// Hace referencia a los elementos <span> que tienen la X que cierra las ventanas modales
var spans = document.querySelectorAll(".cerrar, span.form_cerrar");

// Asignar eventos a cada botón para abrir las ventanas modales
botones.forEach(function (boton, index) {
    boton.addEventListener("click", function () {
        document.body.style.overflow = 'hidden';
        modals[index].style.display = "block";
    });
});

// Asignar eventos a cada span para cerrar las ventanas modales
spans.forEach(function (span, index) {
    span.addEventListener("click", function () {
        document.body.style.overflow = 'auto';
        modals[index].style.display = "none";
    });
});

// Si el usuario hace clic fuera de la ventana, se cierra
window.addEventListener("click", function (event) {
    modals.forEach(function (modal) {
        if (event.target === modal) {
            document.body.style.overflow = 'auto';
            modal.style.display = "none";
        }
    });
});

// ---------------------------------boton--------------------------------
