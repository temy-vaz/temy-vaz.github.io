// Actualiza automáticamente el año en el footer
//current year = año actual
document.addEventListener("DOMContentLoaded", function() {
    const yearElement = document.getElementById("year");
    const currentYear = new Date().getFullYear();
    yearElement.textContent = currentYear;
});
