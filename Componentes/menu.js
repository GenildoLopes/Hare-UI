// MENU

const btnOpen = document.getElementById('open-menu');
btnOpen.addEventListener('click', toggleMenu);

const btnClose = document.getElementById('close-menu');
btnClose.addEventListener('click', toggleMenu);

const brand = document.getElementById('brand');

const list = document.getElementById('list');
const listUl = document.getElementsByTagName('nav');

function toggleMenu() {

    if (list.style.display = 'none') {

        list.classList.add("nav-show")
        // btnOpen.style.display = 'none';
        // btnClose.style.display = 'block';
        // brand.style.display = 'none';

    } else if (list.style.display = 'block') {

        list.classList.add("nav-hide")
        // btnClose.style.display = 'none';
        // btnOpen.style.display = 'block';
        // brand.style.display = 'block';
    }

    // list.style.display = 'block';
    // btnOpen.style.display = 'none';
    // btnClose.style.display = 'block';
    // brand.style.display = 'none';
};

// function closeMenu() {

    // list.style.display = 'none';
    // btnClose.style.display = 'none';
    // btnOpen.style.display = 'block';
    // brand.style.display = 'block';

// };
