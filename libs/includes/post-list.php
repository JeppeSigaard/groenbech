
<?php

if(isset($postlist_query)){

    $result = get_posts($postlist_query);

    $format_query = array();

    $format_query['num_words'] = 30;
    if(isset($postlist_query['num_words'])){
        $format_query['num_words'] = $postlist_query['num_words'];
    }

}

else{

    $result = get_posts(array(
        'posts_per_page'   => -1,
        'offset'           => 0,
        'orderby'          => 'post_date',
        'order'            => 'DESC',
        'post_type'        => array('case','post','page','reference'),
        'post_status'      => 'publish',
        'suppress_filters' => true
    ));


}

$number_posts = 0;
foreach($result as $num){
    $number_posts ++;
}

if($number_posts % 4 == 3 || $number_posts % 4 == 0){
    $numberclass = 4;
}

$numberclass = ' mod-'.$number_posts % 3;

if($number_posts % 4 == 3 || $number_posts % 4 == 0){
    $numberclass = ' mod-4';
}

?>

<ul class="post-list<?php echo $numberclass ?>" role="group">
<?php
$i = 0; foreach($result as $post) :
$i ++;
$post_link = apply_filters('the_permalink',get_the_permalink($post->ID));

$video_pseudo='';
if (get_post_meta($post->ID,'add_video',true) !== ''){$video_pseudo='<div class="has-video"></div>';}

    ?>
    <li class="post-list-item" role="article">
        <a href="<?php echo $post_link ?>" title="<?php echo get_the_title($post->ID); ?>">
            <div class="post-img">
                <?php echo $video_pseudo; ?>
                <?php echo get_the_post_thumbnail($post->ID,'postlist'); ?>
            </div>
            <div class="post-text">
                <div class="post-title"><?php echo get_the_title($post->ID) ?></div>
                <div class="post-desc">
                    <p><?php echo wp_trim_words($post->post_content, $num_words = $format_query['num_words'], $more = '');?></p>
                </div>
            </div>
        </a>
        <div class="post-more"><a href="<?php echo $post_link ?>" title="<?php echo smamo_lang('Læs mere','Read more') ?>"><?php echo smamo_lang('Læs mere','Read more') ?></a></div>
    </li>
<?php endforeach; ?>
</ul>
