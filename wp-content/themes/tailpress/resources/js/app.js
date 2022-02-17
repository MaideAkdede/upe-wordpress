// Navigation toggle
import 'owl.carousel';
/*$(function() {
    alert('hello');
    /!*
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items: 6
    });*!/
});*/
//Mais les fichier sont bien chargés (css et js) c'est juste qu'il me dit undefined a un quelque chose pour je ne sais quelle raison
window.addEventListener('load', function () {
    let main_navigation = document.querySelector('#primary-menu');
    let burger = document.querySelector('#primary-menu-toggle');
    let openclose = document.querySelector('#button-toggle');
    let memberButton = document.querySelector('#button-member');
    let cart = document.querySelector('.cart');
    let bg = document.querySelector('.menu-bg');
    //
    let catbtn = document.querySelector('.category-toggle');
    let catdrop = document.querySelector('.category-dropdown');
    if (catbtn != null) {
        catbtn.addEventListener('click', (e) => {
            catdrop.classList.toggle('hidden');
        });
    }
    //
    document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
        e.preventDefault();
        main_navigation.classList.toggle('hidden');
        bg.classList.toggle('hidden');
        //
        openclose.classList.toggle('not-active_menu-elements');
        openclose.classList.toggle('active_menu-elements');
        //
        if (cart !== null) {
            cart.classList.toggle('not-active_cart');
            cart.classList.toggle('active-cart');
        }
        //
        document.querySelector('body').classList.toggle('fixed');
        //
        const logos = document.querySelectorAll('.toggle-burger');
        for (let logo of logos) {
            logo.classList.toggle('hidden');
        }
        memberButton.classList.toggle('not-active_menu-button');
        memberButton.classList.toggle('active_menu-button');
    });
});