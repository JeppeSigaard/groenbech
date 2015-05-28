<?php
$kontaktpersoner = get_post_meta(get_the_ID(),'kontaktperson',true);

if(!empty($kontaktpersoner) && !empty($kontaktpersoner[0])) : ?>
<div class="ct-personer">
   <strong>Kontaktperson<?php if(count($kontaktpersoner) > 1){echo 'er';} ?></strong>
    <?php foreach($kontaktpersoner as $person): ?>

    <a href="<?php echo get_permalink($person) ?>">
      <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id($person)) ?>
        <div>
            <img src="<?php echo $img['0']; ?>"/>
            <span><?php echo get_post_meta($person,'fname',true);?></span>
        </div>
    </a>
    <?php endforeach;?>
</div>
<?php endif; ?>
