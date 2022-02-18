// Owl Carousel 2
import jquery from "jquery";
$ = jQuery = jquery;
require("owl.carousel");

$(function () {
    this.owl = $('.owl-carousel');
    this.owl.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            640:{
                items:2
            },
            768:{
                items:3
            },
            1024:{
                items:5
            }
        }
    });
});