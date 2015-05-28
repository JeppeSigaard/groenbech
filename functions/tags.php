<?php



// Funktion
add_action( 'init', 'smamo_create_global_tags', 0 );
function smamo_create_global_tags() {

    // Array, post types der skal tilføjes tagsperpage
    $smamo_post_types_for_tags = array('page','medarbejder','referencer','citat','case','slide');



	$labels = array(
		'name'                       => _x( 'Emner', 'taxonomy general name' ),
		'singular_name'              => _x( 'Emne', 'taxonomy singular name' ),
		'search_items'               => __( 'Søg i emner' ),
		'popular_items'              => __( 'Mest brugte emner' ),
		'all_items'                  => __( 'Alle emner' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Rediger emner' ),
		'update_item'                => __( 'opdater emner' ),
		'add_new_item'               => __( 'Tilføj nyt emne' ),
		'new_item_name'              => __( 'Nyt emne' ),
		'separate_items_with_commas' => __( 'Separer nye emner med komma.' ),
		'add_or_remove_items'        => __( 'Tilføj eller fjern emne' ),
		'choose_from_most_used'      => __( 'Vælg fra mest brugte emner' ),
		'not_found'                  => __( 'Ingen emner fundet.' ),
		'menu_name'                  => __( 'Emner' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
        'show_in_menu'          => false,
        'show_in_nav_menus'     => true,
		'show_admin_column'     => false,
        'has_archive'           => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'emne' ),
	);

    register_taxonomy( 'emne', $smamo_post_types_for_tags, $args );
}
?>
