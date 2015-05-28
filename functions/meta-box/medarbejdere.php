<?php

$mb[] = array(
		'id' => 'info',
		'title' => __( 'Kontaktoplysninger', 'rwmb' ),
		'pages' => array('medarbejder'),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,

		'fields' => array(

            array(
                'name'  => __( 'Fornavn', 'rwmb' ),
                'id'    => "fname",
                'type' => 'text',
            ),

            array(
                'name'  => __( 'Efternavn', 'rwmb' ),
                'id'    => "lname",
                'type' => 'text',
            ),

            array(
                'name'  => __( 'Telefonnummer', 'rwmb' ),
                'id'    => "phone",
                'type' => 'text',
            ),

            array(
                'name'  => __( 'Email', 'rwmb' ),
                'id'    => "email",
                'type' => 'email',
            ),

        ),


    );


$mb[] = array(
    'id' => 'footer',
    'title' => __( 'Billede til footer', 'rwmb' ),
    'pages' => array('medarbejder'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( '', 'rwmb' ),
            'id'    => "footer_image",
            'type' => 'image_advanced',
            ),
    ),
);


?>
