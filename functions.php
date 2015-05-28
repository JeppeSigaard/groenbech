<?php
/*------------------------------------------*/
/* SmartMonkey Theme for Grønbech */
/* $SMAMO used for global object class */
/* Add to it if you'd like, for nice var'ing */
/*------------------------------------------*/

// Helper funktioner
require('functions/helpers.php');

// THEME Setup
add_action( 'after_setup_theme', 'smartmonkey_setup' );
function smartmonkey_setup(){load_theme_textdomain( 'smartmonkey', get_template_directory() . '/languages' );

// Theme support
require('functions/theme-support.php');

// Billeder
require('functions/images.php');

// Tilføj menuer
require('functions/menus.php');

}

// Tilf'j ekstra felter
require('functions/options.php');

// Tilf'j ekstra felter
require('functions/meta-box.php');

// Tilføj ekstra felter for tax
require('functions/tax-meta.php');

// Tilføj scripts
require('functions/scripts.php');

// Tilføj widgets
require('functions/widgets.php');

// Tilføj admin.php
require('functions/admin.php');

// Modificer header
require('functions/header.php');

// Tilføj ekstra post types
require('functions/post-types.php');

// Tilføj globale tags
require('functions/tags.php');

// Set title
add_filter( 'the_title', 'smartmonkey_title' );
function smartmonkey_title( $title ) {if ( $title == '' ) {return '&rarr;';} else {return $title;}}
add_filter( 'wp_title', 'smartmonkey_filter_wp_title' );
function smartmonkey_filter_wp_title( $title ){return $title . esc_attr( get_bloginfo( 'name' ) );}


?>
