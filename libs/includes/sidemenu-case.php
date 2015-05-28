<?php

$cases = get_posts(array(
            'posts_per_page'   => -1,
            'offset'           => 0,
            'orderby'          => 'menu_order',
            'order'            => 'DESC',
            'post_type'        => 'case',
            'post_status'      => 'publish',
            'suppress_filters' => true
        ));

?>
<div id="side-menu">
    <a class="side-parent" href="<?php echo get_post_type_archive_link( 'case' ); ?>">
        <?php echo smamo_lang('Referencer','References') ?>
    </a>
    <ul class="side-children">
    <?php

    foreach($cases as $case):
    $current = '';
    if($post->ID == $case->ID){$current = ' current_page_item';}

    ?>
    <li class="page_item page-item-<?php echo $case->ID.$current; ?>">
        <a href="<?php echo apply_filters('the_permalink',get_the_permalink($case->ID)); ?>">
            <?php echo apply_filters('the_title',$case->post_title); ?>
        </a>
    </li>
    <?php endforeach; ?>
    </ul>
</div>
