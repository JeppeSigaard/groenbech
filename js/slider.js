// @koala-prepend '../libs/owlcarousel/owl.carousel.js';

var smamoAutoplayTime = 12000;
var smamoAutoplaySpeed = 800;

function addSmamoTimer(){
    if(!$('.slide-timer').length){
        var smamo_timer = $('<div class="slide-timer"><!--<div><div></div></div>--></div>');
        setTimeout(function(){
            $('.owl-nav').remove();
            $(smamo_timer).insertAfter('.owl-dots');
        },50);
    }
}



function smamo_resize(obj){

    obj.css('height',$(window).height());

}


jQuery(function($){


    var smamo_slider = $('#main-slider');

    if (smamo_slider.length){

        smamo_slider.owlCarousel({
            items : 1,
            loop: true,
            autoplay: true,
            autoplayTimeout : smamoAutoplayTime,
            autoplaySpeed : smamoAutoplaySpeed,
            nav: false,

        });

        addSmamoTimer();
        smamo_resize(smamo_slider);
        $(window).resize(function(){
            smamo_resize(smamo_slider);
        });
    }


});
