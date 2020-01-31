// Hare UI v.1.0.0
// Slide Show

const carouselSlide = document.querySelector('.carousel-slide')
const carouselImages = document.querySelectorAll('.carousel-slide img')

// Buttons
const btnPrev = document.querySelector('#btn-prev')
const btnNext = document.querySelector('#btn-next')

// Count
let count = 1
const size = carouselImages[0].clientWidth

carouselSlide.style.transform = 'translateX('+ (- size * count) +'px)'

btnNext.addEventListener('click', nextImage)
btnPrev.addEventListener('click', prevImage)

function nextImage() {
    
    carouselSlide.style.transition = 'transform .7s ease'
    count++
    carouselSlide.style.transform = 'translateX('+ (- size * count) +'px)'

}

function prevImage() {

    carouselSlide.style.transition = 'transform .7s ease'
    count--
    carouselSlide.style.transform = 'translateX('+ (- size * count) +'px)'

}

carouselSlide.addEventListener('transitionend', stopTransition)

function stopTransition() {
    
    if (carouselImages[count].id === 'lastImg') {

        carouselSlide.style.transition = 'none'
        count = carouselImages.length -2
        carouselSlide.style.transform = 'translateX('+ (- size * count) +'px)'
        
    }

    if (carouselImages[count].id === 'firstImg') {

        carouselSlide.style.transition = 'none'
        count = carouselImages.length - 2
        carouselSlide.style.transform = 'translateX('+ (- size * count) +'px)'
        
    }

}