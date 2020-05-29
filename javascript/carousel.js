const myCarousel = new Carousel({
    container: document.querySelector('.slider'),
    items: document.querySelectorAll('.slider__item'),
    autoplay: true,
    autoplayTime: 3500,
    displayControls: true,
    controlsContainer: document.querySelector('.slider__controls'),
    textControls: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"]
});
