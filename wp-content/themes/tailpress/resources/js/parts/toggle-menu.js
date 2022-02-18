/*
let main_navigation = document.querySelector('#primary-menu');
let openclose = document.querySelector('#button-toggle');
let memberButton = document.querySelector('#button-member');
let cart = document.querySelector('.cart');
let bg = document.querySelector('.menu-bg');

document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    console.log(e)
    main_navigation.classList.toggle('hidden');
    bg.classList.toggle('hidden');

    openclose.classList.toggle('not-active_menu-elements');
    openclose.classList.toggle('active_menu-elements');

    if (cart !== null) {
        cart.classList.toggle('not-active_cart');
        cart.classList.toggle('active-cart');
    }

    document.querySelector('body').classList.toggle('fixed');

    const logos = document.querySelectorAll('.toggle-burger');
    for (let logo of logos) {
        logo.classList.toggle('hidden');
    }
    memberButton.classList.toggle('not-active_menu-button');
    memberButton.classList.toggle('active_menu-button');
});
 */
(function () {
    const ToggleMenu = {
        init() {
            this.main_navigation = document.querySelector('#primary-menu');
            this.openclose = document.querySelector('#button-toggle');
            this.burger = document.getElementById('primary-menu-toggle');
            this.memberButton = document.querySelector('#button-member');
            this.cart = document.querySelector('.cart');
            this.bg = document.querySelector('.menu-bg');

            this.burger.addEventListener('click', (e) => {
                e.preventDefault();
                this.toggle();
            });
        },
        toggle(){
            this.main_navigation.classList.toggle('hidden');
            this.bg.classList.toggle('hidden');

            this.openclose.classList.toggle('not-active_menu-elements');
            this.openclose.classList.toggle('active_menu-elements');

            if (this.cart !== null) {
                this.cart.classList.toggle('not-active_cart');
                this.cart.classList.toggle('active-cart');
            }
            document.querySelector('body').classList.toggle('fixed');
            this.logos = document.querySelectorAll('.toggle-burger');
            for (let logo of this.logos) {
                logo.classList.toggle('hidden');
            }
            this.memberButton.classList.toggle('not-active_menu-button');
            this.memberButton.classList.toggle('active_menu-button');
        }
    }
    ToggleMenu.init();
})();