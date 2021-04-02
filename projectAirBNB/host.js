const carouselSlide = document.querySelector('.Carousel__Slide');
const carouselImages = document.querySelectorAll('.Carousel__Slide  .Carousel__Item');

//buttons
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn'); 

//counter
let counter = 1;
const size = carouselImages[0].clientWidth;
console.log(size);


carouselSlide.style.transform = 'translateX(' + (-size * counter) +'px)';


//button listener

nextBtn.addEventListener('click', () => {
    if (counter >= carouselImages.length -4) return;
    carouselSlide.style.transition = 'transform 0.4s ease-in-out';
    counter++;
    // console.log(counter);
    carouselSlide.style.transform = 'translateX(' + (-size * counter) +'px)';

});
prevBtn.addEventListener('click', () => {
    if (counter <= 0) return;
    carouselSlide.style.transition = 'transform 0.4s ease-in-out';
    counter--;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) +'px)';
    
});