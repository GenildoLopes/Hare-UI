// NAV MENU

// Get 'Btn Open'
const openNavList = document.querySelector('#open-menu')

// Get List
const navList = document.querySelector('.nav-list')

// Function Open
openNavList.addEventListener('click', ()=> {

    navList.style.right = '0'

})

// Function Close

navList.addEventListener('click', ()=> {

    navList.style.right = '-100%'

})