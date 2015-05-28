<?php

$mb[] = array(
    'id' => 'video',
    'title' => __( 'Tilføj video', 'rwmb' ),
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
    ),
);


?>
