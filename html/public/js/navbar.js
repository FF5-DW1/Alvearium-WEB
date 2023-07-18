// seleccionar todos los enlaces en la navegación 
let navLinks = document.querySelectorAll('.main-nav .link-item');

// para cada enlace en navLinks
navLinks.forEach(function(link) {
  // añadir un event listener para el evento 'click'
  link.addEventListener('click', function(event) {
    // previene la acción por defecto
    event.preventDefault();

    // obtenemos el href del enlace, quitamos el '#'
    let id = this.getAttribute('href').substring(1);
    // seleccionamos la sección con el ID equivalente y realizamos el scroll hasta ella
    let section = document.getElementById(id);
    section.scrollIntoView({behavior: 'smooth'});
  });
});