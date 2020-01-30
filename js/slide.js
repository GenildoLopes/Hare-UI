// Hare UI v.1.0.0

// Slide Show

const boxSlide = document.querySelector('.box-slide')

const btnPrev = document.querySelector('#btn-prev')
const btnNext = document.querySelector('#btn-next')

btnPrev.addEventListener('click', prevImg)
btnNext.addEventListener('click', nextImg)

var i = 0
var images = []

// Set Images

var imgOne = document.querySelector('#img-one').value
var imgTwo = document.querySelector('#img-two')
var imgThree = document.querySelector('#img-three')
var imgFour = document.querySelector('#img-four')

images[0] = imgOne
images[1] = imgTwo
images[2] = imgThree
images[3] = imgFour

console.log(images[1])

function prevImg() {

    if(images.length > 0) {
        i--
    } else {
        return null
    }
}

function nextImg() {

    if (images.length < 4) {
        i++
    } else {
        return null
    }
}

   // boxSlide.innerHTML = images[i]
