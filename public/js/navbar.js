//close sidenav with escape key
const sidenav = document.querySelector('#menu-open');
sidenav.addEventListener('keyup', e => {
    if(e.keyCode == 27) {
        console.log('esc pressed!');
        document.location.hash = "";
    }
});

console.log('i am running!'); 

const closeNav = document.querySelector('#menu-close');
const openNav = document.querySelector('#menu-button');

sidenav.addEventListener('transitioned', e => {
    if(e.propertyName !== 'transform') {
        return;
    }

    const isOpen = document.location.hash === '#menu-open';
    isOpen ? closeNav.focus() : openNav.focus();
});