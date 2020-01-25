// Hare JS
// v.1.0.0

// MODAL

// Open
var boxModal = document.getElementById('modal');

var btnOpenModal = document.getElementById('open-modal');
btnOpenModal.addEventListener('click', openModal);

var bodyDoc = document.getElementsByTagName('body');

console.log(bodyDoc);


function openModal(){

    boxModal.style.display = 'block';
    bodyDoc.addClassList('darkness');

};

// Close
var btnCloseModal = document.getElementById('close-modal');
btnCloseModal.addEventListener('click', closeModal);

var cancelModal = document.getElementById('cancel-modal');
cancelModal.addEventListener('click', closeModal);


function closeModal(){

    boxModal.style.display = 'none';

};
















