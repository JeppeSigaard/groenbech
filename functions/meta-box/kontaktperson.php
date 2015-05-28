<?php


$mb[] = array(
    'id' => 'ctp',
    'title' => __( 'Kontaktperson', 'rwmb' ),
    'pages' => array('post','case','reference','page'),
    'context' => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Tilføj kontaktperson(er)', 'rwmb' ),
            'id'    => "kontaktperson",
            'desc'  => __('Klon feltet med det blå plus, fjern felter med det grå minus','rwmb'),
            'type' => 'post',
            'clone' => true,
            'post_type'   => 'medarbejder',
            'field_type'  => 'select_advanced',
            'placeholder' => __( 'Vælg en medarbejder', 'meta-box' ),
            'query_args'  => array(
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
				)

            ),
    ),
);


?>
