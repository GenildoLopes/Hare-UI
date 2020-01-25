// MENU

var btnOpen = document.getElementById('open-menu');
btnOpen.addEventListener('click', openMenu);

var btnClose = document.getElementById('close-menu');
btnClose.addEventListener('click', closeMenu);

var brand = document.getElementById('brand');

var list = document.getElementById('list');
var listUl = document.getElementsByTagName('nav');

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
