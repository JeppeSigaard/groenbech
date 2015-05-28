<?php

$footer_options = get_option('footer_options');
$email = ($footer_options['email'] !== '') ? $footer_options['email'] : 'mail@groenbech.com' ;

$mb[] = array(
    'id' => 'ct-form',
    'title' => __( 'Opret en kontaktformular til denne side', 'rwmb' ),
    'pages' => array('post','page','case','medarbejder'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Aktiver for siden', 'rwmb' ),
            'id'    => "ct-form-active",
            'type' => 'checkbox',
            'std'    => '0',
            ),
        
        array(
            'name'  => __( 'Følgetekst', 'rwmb' ),
            'id'    => "ct-form-text",
            'type' => 'textarea',
            'placeholder'   => 'Skriv en tekst, der vises inden formularen',
            ),
        
        array(
            'name'  => __( 'Modtager', 'rwmb' ),
            'id'    => "ct-form-receiver",
            'type' => 'email',
            'desc' => __('Hvis email efterlades tom, anvendes email fra indstillinger i sidens footer','smamo'),
            'placeholder'   => $email,
            ),
    ),
);


?>