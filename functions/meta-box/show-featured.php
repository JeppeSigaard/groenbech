<?php

$mb[] = array(
    'id' => 'show_feat',
    'title' => __( 'Vis på forsiden', 'rwmb' ),
    'pages' => array('referencer','page','post','case','person'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Vis på forsiden', 'rwmb' ),
            'id'    => "show_featured",
            'type'  => 'checkbox',
            'std'   => 0,
            ),
    ),
);


?>
