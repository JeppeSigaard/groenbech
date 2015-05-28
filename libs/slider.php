<div id="main-slider">
<?php

$slides = get_posts(array(
    'posts_per_page'   => 9,
    'offset'           => 0,
    'post_type'        => array('slide'),
    'post_status'      => 'publish',
    'suppress_filters' => true
));

foreach($slides as $slide) :
$item = $slide;
if (get_post_meta($item->ID,'from_post',true) !== 0){
    $item = get_post(get_post_meta($item->ID,'from_post',true));
}

?>

    <a class="slide-item" href="#">
        <img src=""/>



    </a>
<?php endforeach; ?>
</div>
