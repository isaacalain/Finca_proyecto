let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }

    const newTransform = `translateX(-${currentSlide * 100}%)`;
    document.querySelector('.carousel-inner').style.transform = newTransform;
}

function moveSlide(direction) {
    showSlide(currentSlide + direction);
}

// Auto-play functionality (optional)
setInterval(() => {
    moveSlide(1);
}, 5000);
