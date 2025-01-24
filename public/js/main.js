
function toggleDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Cierra el dropdown si se hace clic fuera de él
window.onclick = function(event) {
    if (!event.target.matches('.btn-radio')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}




const buttonContainers = document.querySelectorAll('.button-container');

buttonContainers.forEach(container => {
    const link = container.querySelector('.my-link');
    link.addEventListener('click', (event) => {
        // Evita que el enlace navegue inmediatamente
        event.preventDefault(); 
        
        // Ocultar todas las barras
        buttonContainers.forEach(c => c.classList.remove('active'));
        // Mostrar la barra del enlace presionado
        container.classList.add('active');

        // Redirigir después de un pequeño retraso
        setTimeout(() => {
            window.location.href = link.href; // Redirige a la URL del enlace
        }, 300); // Ajusta el tiempo en milisegundos según sea necesario
    });
});