const carousel = document.getElementById('carousel-items');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');

let currentIndexp = 0;

// Get all the slides dynamically
const slides = document.querySelectorAll('#carousel-items li');
const totalSlides = slides.length;

// Adjust carousel width based on number of slides
carousel.style.width = `${totalSlides * 100}%`;

// Add event listeners to buttons
prevButton.addEventListener('click', () => {
  currentIndexp = (currentIndexp === 0) ? totalSlides - 1 : currentIndexp - 1;
  updateCarousel();
});

nextButton.addEventListener('click', () => {
  currentIndexp = (currentIndexp === totalSlides - 1) ? 0 : currentIndexp + 1;
  updateCarousel();
});

// Function to update carousel position
function updateCarousel() {
  const offset = -currentIndexp * 100; // Calculate offset percentage
  carousel.style.transform = `translateX(${offset}%)`;
}
