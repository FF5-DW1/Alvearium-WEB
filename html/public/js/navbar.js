//  seleccionamos los dos elementos que serán clickables

const toggleButton = document.getElementById("button-menu");
const navWrapper = document.getElementById("nav");
const navLinksWrapper = document.querySelector(".nav-links");

/*
cada ves que se haga click en el botón
agrega y quita las clases necesarias
para que el menú se muestre.
*/
toggleButton.addEventListener("click", () => {
    toggleButton.classList.toggle("close");
    navWrapper.classList.toggle("show");
});

/*
Cuándo se haga click fuera del contenedor de enlaces
el menú debe esconderse.
*/

navWrapper.addEventListener("click", (e) => {
    if (e.target.id === "nav") {
        navWrapper.classList.remove("show");
        toggleButton.classList.remove("close");
    }
});

navLinksWrapper.addEventListener("click", (e) => {
    if (e.target.classList.contains("link-item")) {
        navWrapper.classList.remove("show");
        toggleButton.classList.remove("close");
    }
});

// Enlaces a secciones de la web

// seleccionar todos los enlaces en la navegación
let navLinks = document.querySelectorAll(".main-nav .link-item");

// para cada enlace en navLinks
navLinks.forEach(function (link) {
    // añadir un event listener para el evento 'click'
    link.addEventListener("click", function (event) {
        // previene la acción por defecto
        event.preventDefault();

        // obtenemos el href del enlace, quitamos el '#'
        let id = this.getAttribute("href").substring(1);
        // seleccionamos la sección con el ID equivalente y realizamos el scroll hasta ella
        let section = document.getElementById(id);

        const scrollOffset = window.innerWidth <= 768 ? 93 : 113;

        const offset = Math.max(section.offsetTop - scrollOffset, 0);

        window.scrollTo({
            top: offset,
            behavior: "smooth",
        });
    });
});
