<?php

$kontaktpersoner = get_posts(array(
    'posts_per_page'   => 5,
    'offset'           => 0,
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => $post->ID,
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'medarbejder',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true
));


if(!empty($kontaktpersoner) && !empty($kontaktpersoner[0])) : ?>
<div class="ct-personer ct-list">
    <?php foreach($kontaktpersoner as $person): $person = $person->ID ?>

    <a href="<?php echo apply_filters('the_permalink',get_the_permalink($person)); ?>">
      <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id($person)) ?>
        <div>
            <img src="<?php echo $img['0']; ?>"/>
            <span><?php echo get_post_meta($person,'fname',true).' '.get_post_meta($person,'lname',true);?></span>
        </div>
    </a>
    <?php endforeach;?>
</div>
<?php endif; ?>
