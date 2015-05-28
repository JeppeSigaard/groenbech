<?php

add_action( 'init', 'smamo_add_menustruktur' );

function smamo_add_menustruktur() {
	register_post_type( 'menustruktur', array(

        'menu_icon' 		 => 'dashicons-menu',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => false,
        'show_in_nav_menus'  => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'menustruktur' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title'),
        'labels'             => array(

            'name'               => _x( 'Menustruktur', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Strukturelement', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Menustruktur', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Menustruktur', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'element', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny element', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se element', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find element', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt element.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}
?>
