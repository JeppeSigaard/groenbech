<?php

$menu_name = 'main-menu';   // menu name --------------------- */
/* ----------------------------------------------------------- */

$sub_menu = '';             // empty string for adding menu items
$post_parent = 0;           // default var for parent item
$menu_parent = '';


/* Conditional wrapper, only run the menu constructor if $menu_name is valid */
if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {

    // Get the menu object based on its location
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    // get the menu items based on the menu id
	$menu_items = wp_get_nav_menu_items($menu->term_id);

    // First loop, find the menu parent object
    foreach ($menu_items as $item) {

        // If a menu item refers this post, and its menu item parent is not zero, choose the parent ID
        if($item->object_id == $post->ID && $item->menu_item_parent !== 0){
            $menu_parent = $item->menu_item_parent;
        }

        // If a menu item refers this post, and its menu item parent is zero, choose the item ID iteself
        if($item->object_id == $post->ID && $item->menu_item_parent == 0){
            $menu_parent = $item->ID;
        }
    }

    // Get the post ID from parent menu item ID
    $post_parent = get_post_meta($menu_parent, '_menu_item_object_id', true );

    // Second loop, construct the $sub_menu
    foreach ($menu_items as $item) {

        // Conditional, in case the first loop returned empty, and to sort out unrelated menu items
        if (isset($menu_parent) && $item->menu_item_parent == $menu_parent) {

            // poor mans logic to add current_page_item class for styling
            $current = ''; if($item->object_id == $post->ID){$current = ' current_page_item';}

            // Do markup
            $sub_menu .= "<li class='item-".$item->object_id.$current."'><a href='" . $item->url . "'>". $item->title . "</a></li>";
        }
    }
}

// ready to print $sub_menu and use $post_parent for titling and such.
if(isset($menu_parent) && !empty($sub_menu)) :

?>

<div id="side-menu">
    <a class="side-parent" href="<?php echo apply_filters('the_permalink',get_the_permalink($post_parent)); ?>">
        <?php echo get_the_title($post_parent); ?>
    </a>
    <ul class="side-children">
    <?php echo $sub_menu; ?>
    </ul>
</div>


<?php endif; ?>
