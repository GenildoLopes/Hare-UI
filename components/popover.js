// Hare UI v.1.0
// Popover

const popOverOne = document.querySelector('#popover-1')

// console.log(popOverOne);


const popShootOne = document.querySelector('#popshoot-1')
popShootOne.addEventListener('mouseenter', showPopOne)

// console.log(popShootOne);


function showPopOne() {
    
    popOverOne.style.display = 'block'

}

// console.log(showPopOne);
