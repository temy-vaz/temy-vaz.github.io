// Lista de imágenes desde Firebase Storage
const imagePaths = [
    "https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/b3.png?alt=media&token=dead5378-d2ae-4c32-b22a-d42ca74c23ce",
    "https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/b2.png?alt=media&token=bf1d6adc-7f98-4eb6-a167-1d5678da6d1d",
    "https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/staybridge.png?alt=media&token=ab02400e-123f-4be8-8c5f-a36bd698d68b"
];

let currentIndex = 0;

function showNextImage() {
    const headerImageDiv = document.querySelector('.header__image img');
    if (headerImageDiv) {
        // Cambiar la fuente de la imagen a la siguiente en la lista
        headerImageDiv.src = imagePaths[currentIndex];
        currentIndex = (currentIndex + 1) % imagePaths.length; // Loop back al principio
    }
}

// Cambiar la imagen cada 9 segundos
setInterval(showNextImage, 9000);

// Mostrar la primera imagen al cargar la página
window.onload = function() {
    showNextImage();
};
