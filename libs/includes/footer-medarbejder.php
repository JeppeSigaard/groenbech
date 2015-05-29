<?php
$medarbejdere = get_posts(array(
    'posts_per_page'   => -1,
    'offset'           => 0,
    'post_type'        => 'medarbejder',
    'post_status'      => 'publish',
    'suppress_filters' => true
));
$i = 0;
foreach($medarbejdere as $mb){
    $img = wp_get_attachment_image_src(get_post_meta($mb->ID,'footer_image',true),'mb-footer');
    if ($img){$i++;}
}

?>
<ul class="mb-list has-<?php echo $i; ?>">
<?php

    foreach($medarbejdere as $mb):
    $img = wp_get_attachment_image_src(get_post_meta($mb->ID,'footer_image',true),'mb-footer');
    if ($img):
    ?>
    <li class="mb">
        <a href="<?php echo apply_filters('the_permalink',get_the_permalink($mb->ID)); ?>" title="<?php echo get_the_title($mb->ID); ?>">
            <img src="<?php echo $img[0]; ?>" alt="<?php echo $mb->post_title ?>"/>
        </a>
    </li>
    <?php endif; endforeach; ?>
</ul>
