document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    const slides = document.querySelectorAll(".carousel-item");
    const dots = document.querySelectorAll(".dot");
    const totalSlides = slides.length;
    let currentIndex = 0;

    
    function updateDots() {
        dots.forEach((dot) => {
            dot.classList.add("bg-transparent", "border-gray-300"); 
            dot.classList.remove("bg-white"); 
        });
        dots[currentIndex].classList.remove(
            "bg-transparent",
            "border-gray-300"
        ); // Remove default styles
        dots[currentIndex].classList.add("bg-white"); 
    }

 
    function moveToNextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        updateDots();
    }

    
    setInterval(moveToNextSlide, 5000);


    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentIndex = index;
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateDots();
        });
    });

    
    updateDots();
});
