// Hare UI v.1.0
// MENU MOBILE

// Get Btn Open
const btnOpenMenu = document.getElementById('open-menu')
// Get Btn Close
const btnCloseMenu = document.getElementById('close-menu')

// Add Functions
btnOpenMenu.addEventListener('click', openMenu)
btnCloseMenu.addEventListener('click', closeMenu)

// Get Navlist
const navList = document.querySelector('.nav-list')
// Get Brand
const navBrand = document.querySelector('.nav-brand');

// Function for Open Menu
function openMenu() {
    navList.classList.add('list-block')
    navBrand.classList.add('d-none')
}

// Function for Close Menu
function closeMenu() {
    navList.classList.remove('list-block')
    navBrand.classList.remove('d-none')
}

