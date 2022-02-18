(function () {
    const ToggleCategories = {
        init() {
            this.button = document.querySelector('.category-toggle');
            this.dropdown = document.querySelector('.category-dropdown');
            this.toggle();
        },
        toggle(){
            if (this.button != null) {
                this.button.addEventListener('click', (e) => {
                    this.dropdown.classList.toggle('hidden');
                });
            }
        }
    }
    ToggleCategories.init();
})();