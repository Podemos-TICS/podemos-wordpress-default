// JavaScript Document

$(window).scroll(function(){
    if ($(window).scrollTop() >= 40) {
       $('.top-main-menu').addClass('fixed');
    }
    else {
       $('.top-main-menu').removeClass('fixed');
    }
});