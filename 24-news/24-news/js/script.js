const slider = document.querySelector('.carousel-slider');
let isDragging = false;
let startPosX = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID;

slider.addEventListener('mousedown', (e) => {
    isDragging = true;
    startPosX = e.clientX;
    animationID = requestAnimationFrame(animation);
    slider.style.transition = 'none';
});

slider.addEventListener('mousemove', (e) => {
    if (isDragging) {
        const mouseX = e.clientX;
        const translateX = mouseX - startPosX;
        currentTranslate = prevTranslate + translateX;
    }
});

slider.addEventListener('mouseup', () => {
    cancelAnimationFrame(animationID);
    isDragging = false;
    const threshold = 100;

    if (Math.abs(currentTranslate - prevTranslate) > threshold) {
        if (currentTranslate < prevTranslate) {
            // scroll right
            prevTranslate -= slider.offsetWidth;
        } else {
            // scroll left
            prevTranslate += slider.offsetWidth;
        }
    }

    slider.style.transition = 'transform 0.5s ease-in-out';
    slider.style.transform = `translateX(${prevTranslate}px)`;
});

function animation() {
    slider.style.transform = `translateX(${currentTranslate}px)`;
    if (isDragging) requestAnimationFrame(animation);
}

