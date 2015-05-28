<?php
register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'smartmonkey' ),
    'icon-menu' => __( 'Ikonmenu', 'smartmonkey' ),
    'main-menu' => __( 'Hovedmenu', 'smartmonkey' ),
    'footer-menu' => __( 'Footermenu', 'smartmonkey' ),
));

remove_filter('nav_menu_description', 'strip_tags');
add_filter( 'wp_setup_nav_menu_item', 'cus_wp_setup_nav_menu_item' );
function cus_wp_setup_nav_menu_item($menu_item) {
                $menu_item->description = apply_filters( 'nav_menu_description',  $menu_item->post_content );
                return $menu_item;
}


class smamo_sublevel_walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

        $link_id = url_to_postid( $item->url );

        global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );

        if ($link_id == 94){

        }

        else{

            $class_names = ' class="' . esc_attr( $class_names ) . '"';
            $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
        }

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';


        if ($link_id == 94){
            $item_output = '<li><span class="text-item">' . nl2br($item->description) . '</span></li>';
        }

        else {

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

        }
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}

}

?>
