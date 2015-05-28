<?php

// Billedstørrelser
add_image_size( 'huge', 1600, 900, true );
add_image_size( 'postlist', 560, 315, true );
add_image_size( 'mb-footer', 185, 215, true );

// 16:9
add_image_size( 'widescreen-960',960,540,true);

// medarbejderportræt
add_image_size( 'mb-single', 300, 300, true);


// Opskaler
add_filter( 'image_resize_dimensions', 'smamo_thumbnail_upscale', 10, 6 );
function smamo_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
    if ( !$crop ) return null;

    $aspect_ratio = $orig_w / $orig_h;
    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

    $crop_w = round($new_w / $size_ratio);
    $crop_h = round($new_h / $size_ratio);

    $s_x = floor( ($orig_w - $crop_w) / 2 );
    $s_y = floor( ($orig_h - $crop_h) / 2 );

    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}

// Fjern højde / bredde
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

?>
