<?php  $i = 0;$tags = wp_get_post_terms(get_the_ID(),'emne', array('orderby' => 'count', 'order' => 'DESC'));?>
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