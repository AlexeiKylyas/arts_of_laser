require('./bootstrap');

document.addEventListener("DOMContentLoaded", function() {
    console.log('55555555555555555')
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".header__nav");

    burger.addEventListener("click", function() {
        nav.classList.toggle("active");
    });
});
