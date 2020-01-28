// MENU

const btnOpen = document.getElementById('open-menu');
btnOpen.addEventListener('click', openMenu);

const btnClose = document.getElementById('close-menu');
btnClose.addEventListener('click', closeMenu);

const brand = document.querySelector('.nav-brand');

const list = document.querySelector('.nav-list');
// const listUl = document.getElementsByTagName('nav');

function openMenu() {

    list.style.display = 'block';
    btnOpen.style.display = 'none';
    btnClose.style.display = 'block';
    brand.style.display = 'none';
};

function closeMenu() {

    list.style.display = 'none';
    btnClose.style.display = 'none';
    btnOpen.style.display = 'block';
    brand.style.display = 'block';

};
