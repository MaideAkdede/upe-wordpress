(() => {
  // resources/js/app.js
  window.addEventListener("load", function() {
    let main_navigation = document.querySelector("#primary-menu");
    let burger = document.querySelector("#primary-menu-toggle");
    document.querySelector("#primary-menu-toggle").addEventListener("click", function(e) {
      console.log(e);
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
      burger.querySelector("span:last-child").classList.toggle("bg-gray-600");
      burger.querySelector("span:last-child").classList.toggle("bg-white");
      burger.querySelector("span:nth-child(3)").classList.toggle("hidden");
      burger.querySelector("span:nth-child(2)").classList.toggle("bg-white");
      burger.querySelector("span:nth-child(2)").classList.toggle("bg-gray-600");
    });
  });
})();
