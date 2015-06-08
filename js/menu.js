jQuery(function($){

    /*$('header>div>ul>li>a').click(function(w){
        w.preventDefault();
        if($(this).parent('li').hasClass('active')){
            $(this).parent('li').removeClass('active');
        }

        else{
            $('header>div>ul>li').removeClass('active');
            $(this).parent('li').addClass('active');
        }

    });*/

    $(window).scroll(function(){
        
        if($(window).scrollTop() >= 50){
            $('header').addClass('fixed');
        }

        else{

            $('header.fixed').removeClass('fixed');

        }
    });


    $('#mobile-menu,#mobile-menu-close').click(function(){

        $('#header').toggleClass('visible');

    });
    
});
