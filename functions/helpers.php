<?php

function smamo_lang($da,$en){

    if(get_bloginfo('language') == 'da-DK'){
        return $da;
    }
    else if(get_bloginfo('language') == 'en-US'){
        return $en;
    }
    else{
        return $da;
    }
}


function modify_youtube_embed_url($html) {
    return str_replace("?feature=oembed", "?feature=oembedcontrols=0&showinfo=0&modestbranding=1&playsinline=1&iv_load_policy=3&enablejsapi=1", $html);
}
add_filter('oembed_result', 'modify_youtube_embed_url');



function modify_youtube_iframe($html) {
    return str_replace("iframe", "iframe id='player'", $html);
}
add_filter('oembed_result', 'modify_youtube_iframe');


?>
