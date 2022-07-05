// import './bootstrap';

const hamburger = document.querySelector('.hambuger');
const nav = document.querySelector(".side-bar");


hamburger.addEventListener('click', (e) => {
    e.preventDefault();
    nav.classList.toggle('side-active')
})