<?php

$medarbejdere = get_posts(array(
            'posts_per_page'   => -1,
            'offset'           => 0,
            'orderby'          => 'menu_order',
            'order'            => 'DESC',
            'post_type'        => 'medarbejder',
            'post_status'      => 'publish',
            'suppress_filters' => true
        ));

?>
<div id="side-menu">
    <a class="side-parent" href="<?php echo get_post_type_archive_link( 'medarbejdder' ); ?>">Grønbech</a>
    <ul class="side-children">
    <?php

    foreach($medarbejdere as $medarbejder):
    $current = '';
    if($post->ID == $medarbejder->ID){$current = ' current_page_item';}

    ?>
    <li class="page_item page-item-<?php echo $medarbejder->ID.$current; ?>">
        <a href="<?php echo apply_filters('the_permalink',get_the_permalink($medarbejder->ID)); ?>"><?php echo get_the_title($medarbejder); ?></a>
    </li>
    <?php endforeach; ?>
    </ul>
</div>
