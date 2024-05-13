import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    // const button = document.querySelector('button[aria-controls="mobile-menu"]');
    // const menu = document.getElementById('mobile-menu');

    // button.addEventListener('click', () => {
    //     const expanded = button.getAttribute('aria-expanded') === 'true' || false;
    //     button.setAttribute('aria-expanded', !expanded);
    //     menu.hidden = expanded;
    // });

    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('bg-white');
        } else {
            navbar.classList.remove('bg-white');
        }
    });
});
