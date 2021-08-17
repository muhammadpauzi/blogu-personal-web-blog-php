const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', showNavbarShadow);

function showNavbarShadow() {
    (this.scrollY > 0) ? navbar.classList.add('active') : navbar.classList.remove('active');
}

showNavbarShadow() // browser reloaded