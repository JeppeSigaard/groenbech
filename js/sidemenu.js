$(function(){

    $('#side-menu a').click(function(){
        $(this).addClass('active');

        $('#side-menu li.current_page_item').removeClass('current_page_item');
        $('#side-menu li.current-menu-item').removeClass('current-menu-item');
    });


});
