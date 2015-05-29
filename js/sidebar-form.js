function smamo_sidebar_form_return(form,response){
    
    if(response.error){
        var message = $('<div class="ct-form-message error"></div>');
        message.html(response.error);
        
        form.prepend(message);
        form.removeClass('loading');
        
    }
    
    if(response.success){
        var message = $('<div class="ct-form-message"></div>');
        message.html(response.success);
        
        form.prepend(message);
        form.removeClass('loading').addClass('complete');
        
    
    }

}

function smamo_sidebar_form_send(form,url,data){
    form.addClass('loading');
    form.children('.ct-form-message').remove();
    

    $.ajax({
                url : url,
                type : 'POST',
                data : data,
                dataType : 'json',
                success : function(response){
                    smamo_sidebar_form_return(form,response);
                },
            });
    

}

$(function(){if($('#sidebar-form').length){
    
    autosize($('#sidebar-form textarea'));
    
    $('#sidebar-form').click(function(e){

        var target = $(e.target);
        if(target.is('.ct-form a')){

            e.preventDefault();

            var form = target.parents('form'),
                formData = form.serialize(),
                formUrl = form.attr('action');

            smamo_sidebar_form_send(form,formUrl,formData);
        }

    });
    
}});