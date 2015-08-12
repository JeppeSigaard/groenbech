<?php 


$mb[] = array(
    'id' => 'info',
    'title' => __( 'Information', 'rwmb' ),
    'pages' => array('email'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Sprog', 'rwmb' ),
            'id'    => "locale",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Sendt via form på', 'rwmb' ),
            'id'    => "post_id",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Sendt til', 'rwmb' ),
            'id'    => "email_rec",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Navn', 'rwmb' ),
            'id'    => "navn",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Email', 'rwmb' ),
            'id'    => "email",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Telefon', 'rwmb' ),
            'id'    => "telefon",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Kommentar', 'rwmb' ),
            'id'    => "kommentar",
            'type' => 'textarea',
            ),
    ),
);
