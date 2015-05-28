<?php

$mb[] = array(
    'id' => 'imitate',
    'title' => __( 'Opret slide fra indhold', 'rwmb' ),
    'pages' => array('slide'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Opret slide fra: ', 'rwmb' ),
            'id'    => "from_post",
            'type' => 'post',
            'post_type'   => array('post','page','medarbejder','referencer','case'),
            'placeholder' => __( 'Vælg et indhold', 'meta-box' ),
            'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				)

            ),

    ),
);

$mb[] = array(
    'id' => 'makeself',
    'title' => __( 'Tilføj eller overskriv indhold', 'rwmb' ),
    'pages' => array('slide'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name' => __('Titel','rwmb'),
            'id' => 'titel',
            'type'  => 'text'
        ),

        array(
            'name' => __('Link','rwmb'),
            'id' => 'link',
            'type'  => 'url'
        ),

        array(
            'name'             => __( 'Billede', 'meta-box' ),
            'id'               => "thumb",
            'type'             => 'image_advanced',
            'max_file_uploads' => 1,
			),


        /*
        // OEMBED
			array(
				'name' => __( 'Video', 'meta-box' ),
				'id'   => "video",
				'desc' => __( 'Video overskriver billede', 'meta-box' ),
				'type' => 'oembed',
			),
        */

    ),
);

?>
