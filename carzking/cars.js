 
const open = document.getElementById('open');
const close = document.getElementById('close');
const navbar = document.getElementById('nav');
const main = document.getElementsByTagName('main');

/* This is My Script For Gallery Page (p TAG - NAME = gayab) */

const gayab = document.getElementById("gayab");



open.addEventListener('click', ()=> {
    navbar.style.marginLeft="0%";
    navbar.style.padding="0px";
    open.style.display="none";
    close.style.display="block";
    gayab.style.display="none";
})

close.addEventListener('click', ()=> {
    navbar.style.marginLeft="-200%";
    open.style.display="block";
    close.style.display="none";
    gayab.style.display="block";
})

