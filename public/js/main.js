
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
