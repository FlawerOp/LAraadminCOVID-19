var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click',function(){
    overlay.classList.add('activate');
    popup.classList.add('activate');
});

btnCerrarPopup.addEventListener('click',function(){
    overlay.classList.remove('activate');
    popup.classList.remove('activate');
});

var btnAbrirPopup2 = document.getElementById('btn-abrir-popup-second'),
    overlay2 = document.getElementById('overlay-second'),
    popup2 = document.getElementById('popup-second'),
    btnCerrarPopup2 = document.getElementById('btn-cerrar-popup-second');

btnAbrirPopup2.addEventListener('click',function(){
    overlay2.classList.add('activate');
    popup2.classList.add('activate');
});

btnCerrarPopup2.addEventListener('click',function(){
    overlay2.classList.remove('activate');
    popup2.classList.remove('activate');
});