const btnBarras = document.querySelector('#showModal');
const modalMenu = document.querySelector('#showHideClassName');

document.addEventListener('click', (e) => {
    var isClickInside = btnBarras.contains(e.target);

    if(isClickInside) {
        modalMenu.classList.remove('display-none');
        modalMenu.classList.add('display-block');
    } else {
        modalMenu.classList.remove('display-block');
        modalMenu.classList.add('display-none');
    }
})