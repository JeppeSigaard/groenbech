<?php


$top_menu_args = array(
	'theme_location'  => 'top-menu',
	'container'       => false,
	'menu_class'      => 'menu',
	'echo'            => true,
	'fallback_cb'     => false,
	'items_wrap'      => '<ul role="navigation" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
);


$icon_menu_args = array(
	'theme_location'  => 'icon-menu',
	'container'       => false,
	'menu_class'      => 'menu',
	'echo'            => true,
	'fallback_cb'     => false,
	'items_wrap'      => '<ul id="icon-menu" role="navigation" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
);

$main_menu_args = array(
	'theme_location'  => 'main-menu',
	'container'       => false,
	'menu_class'      => 'menu',
	'echo'            => true,
	'fallback_cb'     => false,
	'items_wrap'      => '<ul role="navigation" class="%2$s">%3$s</ul>',
	'depth'           => 0,
);

?>
<div id="top-menu">
    <div>
        <?php wp_nav_menu($top_menu_args);  ?>
        <?php wp_nav_menu($icon_menu_args); ?>
    </div>
</div>
<header id="header">
    <div>
        <a href="#" title="menu" id="mobile-menu"></a>
        <a id="logo" href="<?php echo home_url('/') ?>" title="<?php wp_title();?>">
            <img src="<?php echo( get_header_image() ); ?>"/>
        </a>
        <?php wp_nav_menu($main_menu_args); ?>
    </div>
</header>
