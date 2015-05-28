<?php

add_action( 'init', 'smamo_add_refs' );

function smamo_add_refs() {
	register_post_type( 'kunde', array(

        'menu_icon' 		 => 'dashicons-testimonial',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'referencer' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 45,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(

            'name'               => _x( 'Kunder', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Kunder', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Kunder', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Kunder', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Ny kunde', 'reference', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny kunde', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se kunde', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find kunde', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny kunde.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );


    register_post_type( 'citat', array(

        'menu_icon' 		 => 'dashicons-testimonial',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=kunde',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'citat' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 16,
		'supports'           => array( 'title'),
        'labels'             => array(

            'name'               => _x( 'Citater', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Citat', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Citater', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Citater', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj nyt ', 'citat', 'smamo' ),
            'add_new_item'       => __( 'Tilføj nyt', 'smamo' ),
            'new_item'           => __( 'Nyt citat', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se citat', 'smamo' ),
            'all_items'          => __( 'Citater', 'smamo' ),
            'search_items'       => __( 'Find citat', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt citat.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

?>
