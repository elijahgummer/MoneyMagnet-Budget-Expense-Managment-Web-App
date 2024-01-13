const slider = document.querySelector(".slider");
const images = document.querySelectorAll(".slider img");
const leftArrow = document.querySelector(".left-arrow");
const rightArrow = document.querySelector(".right-arrow");

let counter = 0;

function showImage(index) {
    images.forEach((image, i) => {
        if (i === index) {
            image.style.opacity = 1;
        } else {
            image.style.opacity = 0;
        }
    });
}

function slideRight() {
    counter = (counter + 1) % images.length;
    showImage(counter);
}

function slideLeft() {
    counter = (counter - 1 + images.length) % images.length;
    showImage(counter);
}

// Initial display of the first image
showImage(counter);

// Add click event listeners to the arrow buttons
leftArrow.addEventListener("click", slideLeft);
rightArrow.addEventListener("click", slideRight);

// Automatically change slides every 3 seconds
setInterval(slideRight, 3500); // Change to the right by default


var typed = new Typed(".auto-type", {
    strings: ["Take Control", "Achieve Financial Freedom", "Master Your Money", "Secure Your Financial Future", "Budget Like a Pro"],
    typeSpeed: 150,
    backSpeed: 150,
    loop: true
})
