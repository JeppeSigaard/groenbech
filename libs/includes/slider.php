<div id="main-slider">
<?php

$slides = get_posts(array(
    'posts_per_page'   => 9,
    'offset'           => 0,
    'post_type'        => array('slide'),
    'post_status'      => 'publish',
    'suppress_filters' => true,
    'orderby'          => 'menu_order',
    'order'            => 'ASC',
));

// enkelt?
$single_class = (count($slides) === 1) ? ' single-slide' : '';
    
foreach($slides as $slide) :
$item = '';
if (get_post_meta($slide->ID,'from_post',true) !== ''){
    $item = get_post(get_post_meta($slide->ID,'from_post',true));
}

$slide_link = get_post_meta($slide->ID,'link',true);
if($slide_link == '' && !empty($item)){$slide_link = get_the_permalink($item->ID);}
if($slide_link == ''){$slide_link = '#';}

$slide_title = apply_filters('the_title',get_post_meta($slide->ID,'titel',true));
$slide_img = wp_get_attachment_image_src(get_post_meta($slide->ID,'thumb',true),'huge');
$tags = wp_get_post_terms($slide->ID,'gtag');


    
// Titel
if(!empty($item) && empty($slide_title)){
    $slide_title = get_the_title($item->ID);
}

// Billede
if(!empty($item) && empty($slide_img)){
    $slide_img = wp_get_attachment_image_src(get_post_thumbnail_id($item->ID),'huge');
}

// Link
if(!empty($item) && empty($slide_link)){
    $slide_link = get_the_permalink($item->ID);
}

/*
// Tags
$tag_args = array('orderby' => 'count', 'order' => 'DESC');
$tags = wp_get_post_terms($slide->ID,'emne',$tag_args);
if (!empty($item) && empty($tags)){
    $tags = wp_get_post_terms($item->ID,'emne',$tag_args);
}
*/

$tags = array(); // Empty array for no tags

// Farvevælger
$colors = array(
    'topmenu_color' => (get_post_meta($slide->ID,'topmenu_color',true) !== '') ? get_post_meta($slide->ID,'topmenu_color',true) : '2',
    'header_color'  => 'hc-'.get_post_meta($slide->ID,'heading_color',true),
    'header_bg'     => 'hb-'.get_post_meta($slide->ID,'heading_bg',true),
    'tag_color'     => 'tc-'.get_post_meta($slide->ID,'tag_color',true),
    'tag_bg'        => 'tb-'.get_post_meta($slide->ID,'tag_bg',true),
);

if($colors['header_color'] == 'hc-'){$colors['header_color'] = 'hc-0';}
if($colors['header_bg'] == 'hb-'){$colors['header_bg'] = 'hb-0';}
if($colors['tag_color'] == 'tc-'){$colors['tag_color'] = 'tc-0';}
if($colors['tag_bg'] == 'tb-'){$colors['tag_bg'] = 'tb-0';}


// Rendér resultat -->
if (!empty($slide_img) && !empty($slide_title)) : ?>

    <div class="slide-item<?php echo $single_class ?>" data-tmc="<?php echo $colors['topmenu_color'] ?>" style="background-image:url(<?php echo $slide_img[0]; ?>);">
        <a href="<?php echo $slide_link;?>">
            <span class="<?php echo $colors['header_color'] ?> <?php echo $colors['header_bg'] ?>"><?php echo $slide_title ?></span>
        </a>
        <?php if (!empty($tags)) : ?>
        <div class="tags <?php echo $colors['tag_color'] .' '. $colors['tag_bg'] ?>">
           <ul class="tags" rel="tag">
                <?php foreach($tags as $tag): ?>
                <li>
                    <a href="<?php echo get_bloginfo('url').'/'.$tag->taxonomy.'/'.$tag->slug ?>">
                        <?php echo smamo_lang($tag->name,get_tax_meta($tag->term_id,'emne_engelsk')); ?>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
        <?php endif; ?>
    </div>

<?php endif; endforeach; ?>
</div>
