'use strict';

function openMenu(x) {
    x.classList.toggle("change");
    let menuMobile = document.querySelector('.mobile-menu').classList.toggle('show');
    document.body.classList.toggle('scroll-lock');
}

jQuery(document).ready(function ($) {
    $('.mobile-menu').click(()=>{
        document.querySelector('.burger-menu').classList.toggle("change");
        let menuMobile = document.querySelector('.mobile-menu').classList.toggle('show');
        document.body.classList.toggle('scroll-lock');
    });
});