// open/close pop-up - How we estimate your earnings potential

    let id = null;
    let container = document.querySelector('.Container__PopUp');
    let popUp = document.querySelector('.PopUp');
    
    document.getElementById("Show").addEventListener('click', () => {
        let pos = 100;
        setInterval(frame, 5);
        clearInterval(id);

        function frame() {
            if (pos == 25) {
                clearInterval(id);
            } else {
                container.style.display = "block";
                popUp.style.display = "block";
                popUp.style.opacity = 1;
                pos--;
                popUp.style.top = pos + "vh";
            }
        }
    });

    //button close pop-up
    document.getElementById("Delete").addEventListener('click', () => {

        popUp.style.display = "none";
        container.style.display = "none";
    });

    //click screen to close pop-up
    container.addEventListener('click', () => {
        container.style.display = "none";
        popUp.style.display = "none";
    });
    


// carousel 2 transition image
const carouselSlide = document.querySelector('.Carousel__Slide');
const carouselImages = document.querySelectorAll('.Carousel__Slide  .Carousel__Item');

//buttons
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//counter
let counter = 0;
const size = carouselImages[0].clientWidth;
// console.log(size);


// carouselSlide.style.transform = 'translateX(' + (-size * counter) +'px)';


//button listener

nextBtn.addEventListener('click', () => {
    if (counter > carouselImages.length - 5) return;
    carouselSlide.style.transition = 'transform 0.4s ease-in-out';
    counter++;
    console.log(counter);

    // carouselImages[(counter-1)].style.display = "none";
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

});
prevBtn.addEventListener('click', () => {
    if (counter <= 0) return;
    carouselSlide.style.transition = 'transform 0.4s ease-in-out';
    counter--;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

});