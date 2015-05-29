<?php

$mb[] = array(
    'id' => 'video',
    'title' => __( 'Tilføj video eller link til billede', 'rwmb' ),
    'pages' => array('case','page','post','medarbejder'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Tilføj en video', 'rwmb' ),
            'id'    => "add_video",
            'type' => 'url',
            'desc'  => __('Tilføj en video, som vises i stedet for thumbnail på adressen for dette indhold.','rwmb'),
            ),
        
        array(
            'name'  => __( 'Eller tilføj en henvisning', 'rwmb' ),
            'id'    => "add_url",
            'type' => 'text',
            'desc'  => __('OBS: Video overskriver henvisningen','rwmb'),
            ),
        
        array(
            'name'  => __( 'Åben henvisning i nyt vindue', 'rwmb' ),
            'id'    => "add_url_blank",
            'type' => 'checkbox',
            'std' => '0', 
            ),
    ),
);


?>
