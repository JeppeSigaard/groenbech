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


function updateHeaderColor(smamo_slider){
    setTimeout(function(){
        
        var activeSlide = smamo_slider.find('.active .slide-item'),
            tmc = activeSlide.attr('data-tmc'),
            menu = $('#top-menu'),
            prev = menu.attr('data-tmc');
        
        
        console.log(smamo_slider.find('.slide-item').length);
        
        if(smamo_slider.find('.slide-item').length === 1){
            activeSlide = smamo_slider.find('.slide-item');
            tmc = activeSlide.attr('data-tmc');
        }
        
        if(prev){
            menu.removeClass('tmc-'+prev);
        }
        menu.attr('data-tmc',tmc).addClass('tmc-'+tmc);
        
    },200);
}


jQuery(function($){


    var smamo_slider = $('#main-slider');

    if (smamo_slider.length){

        if(smamo_slider.children('.slide-item').length > 1){
        smamo_slider.owlCarousel({
            items : 1,
            loop: true,
            autoplay: true,
            autoplayTimeout : smamoAutoplayTime,
            autoplaySpeed : smamoAutoplaySpeed,
            nav: false,

        });
        }
        addSmamoTimer();
        updateHeaderColor(smamo_slider);
        
        smamo_slider.on('changed.owl.carousel', function() {
            updateHeaderColor(smamo_slider);
        })
    }


});
