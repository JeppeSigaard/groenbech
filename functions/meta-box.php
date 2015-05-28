<?php

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    require('meta-box/medarbejdere.php');
    require('meta-box/slider.php');
    require('meta-box/kontaktperson.php');
    require('meta-box/video.php');
    require('meta-box/colors.php');
    require('meta-box/show-featured.php');


return $mb;

}

?>
