<?php 

$embed_code = wp_oembed_get(get_post_meta(get_the_ID(),'add_video',true)); 

if(!isset($image_size)){$image_size = 'widescreen-960';} 

$thumb_url = '';
$obj_begin = 'div'; 
$obj_end = '/div';
if(!$embed_code) {
    $thumb_url = esc_url(get_post_meta(get_the_ID(),'add_url',true));
    $thumb_url_new = (get_post_meta(get_the_ID(),'add_url_blank',true) == '1') ? 'target="_blank"' : '' ;
}
if($thumb_url !== ''){

    $obj_begin = 'a href="'.$thumb_url.'" '.$thumb_url_new;
    $obj_end = '/a';

}

if(has_post_thumbnail()) : ?>

<<?php echo $obj_begin; ?> class="single-img">
    <?php the_post_thumbnail($image_size); ?>
    <?php if($embed_code): echo $embed_code;?>
        <div id="video-play"></div>
    <?php elseif($thumb_url) : ?>
        <div id="link-play"></div>
    <?php endif; ?>
<<?php echo $obj_end; ?>>

<?php elseif($embed_code) : ?>

<div class="single-video">
    <?php echo $embed_code; ?>
</div>

<?php endif; ?>

<article>
    <h1 class="single-title"><?php the_title(); ?></h1>
    <?php $ct_phone = get_post_meta(get_the_ID(),'phone',true); ?>
    <?php if($ct_phone !== '') : $ct_mail = get_post_meta(get_the_ID(),'email',true);?>
    <div class="ct-info">
        <p><strong><?php echo smamo_lang('Telefon: ','Telephone: '); ?></strong> <?php echo $ct_phone; ?></p>
        <p><strong>Email:</strong> <a href="mailto:<?php echo $ct_mail; ?>"><?php echo $ct_mail; ?></a></p>
    </div>
    <?php endif; ?>
    <?php  $i = 0;$tags = wp_get_post_terms(get_the_ID(),'emne');?>
    <?php if(!empty($tags)): ?>
    <ul class="tags-list">
        <strong><?php echo smamo_lang('Læs mere om: ','More about: ');?></strong>
        <?php foreach($tags as $tag): $i++; $name = smamo_lang($tag->name,get_tax_meta($tag->term_id,'emne_engelsk')); if ($name !== '') :
        $link = get_bloginfo('url').'/'.$tag->taxonomy.'/'.$tag->slug;?>
        <li>
            <a href="<?php echo $link ?>"><?php echo $name ?></a>
        </li>
    <?php endif; endforeach; ?>
    </ul>
    <?php endif; ?>
    <?php the_content(); ?>
</article>
