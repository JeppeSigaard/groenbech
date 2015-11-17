<?php

$mb[] = array(
    'id' => 'colors',
    'title' => __( 'Indstil fontfarver for slide. Standardvisning er sort uden baggrund', 'rwmb' ),
    'pages' => array('slide'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Topmenu', 'rwmb' ),
            'id'    => "fakeid",
            'type'    => 'heading',
        ),

        array(
            'name'  => __( 'Topmenu farve', 'rwmb' ),
            'id'    => "topmenu_color",
            'type'    => 'radio',
            'std'   => '2',
				'options' => array(
                    '0' => __( '<span style="color:#333333;">Mørk</span><br/>', 'meta-box' ),
                    '1' => __( '<span style="color:#ffffff;background:#666;padding:0px 2px;">Hvid</span><br/>', 'meta-box' ),
                    '2' => __( '<span style="color:#007f7f;">Grøn</span><br/>', 'meta-box' ),
                    '3' => __( '<span style="color:#7f0000;">Rød</span><br/>', 'meta-box' ),
				),
        ),
        
        array(
            'name'  => __( 'Overskrift', 'rwmb' ),
            'id'    => "fakeid",
            'type'    => 'heading',
        ),

        array(
            'name'  => __( 'Overskrift farve', 'rwmb' ),
            'id'    => "heading_color",
            'type'    => 'radio',
            'std'   => '0',
				'options' => array(
                    '0' => __( '<span style="color:#333333;">Mørk</span><br/>', 'meta-box' ),
                    '1' => __( '<span style="color:#ffffff;background:#666;padding:0px 2px;">Hvid</span><br/>', 'meta-box' ),
                    '2' => __( '<span style="color:#007f7f;">Grøn</span><br/>', 'meta-box' ),
                    '3' => __( '<span style="color:#7f0000;">Rød</span><br/>', 'meta-box' ),
				),
        ),

        array(
            'type' => 'divider',
            'id'   => 'fake_divider_id',
        ),


        array(
            'name'  => __( 'Overskrift baggrund', 'rwmb' ),
            'id'    => "heading_bg",
            'type'    => 'radio',
            'std'   => '0',
            'options' => array(
                '0' => __( '<span style="color:#999;">(ingen)</span><br/>', 'meta-box' ),
                '1' => __( '<span style="color:#333333;">Mørk</span><br/>', 'meta-box' ),
                '2' => __( '<span style="color:#ffffff;background:#666;padding:0px 2px;">Hvid</span><br/>', 'meta-box' ),
                '3' => __( '<span style="color:#007f7f;">Grøn</span><br/>', 'meta-box' ),
                '4' => __( '<span style="color:#7f0000;">Rød</span><br/>', 'meta-box' ),
				),
        ),

        array(
            'name'  => __( 'Tags', 'rwmb' ),
            'id'    => "fakeid",
            'type'    => 'heading',
        ),

        array(
            'name'  => __( 'Tags farve', 'rwmb' ),
            'id'    => "tag_color",
            'type'    => 'radio',
            'std'   => '0',
				'options' => array(
                    '0' => __( '<span style="color:#333333;">Mørk</span><br/>', 'meta-box' ),
                    '1' => __( '<span style="color:#ffffff;background:#666;padding:0px 2px;">Hvid</span><br/>', 'meta-box' ),
                    '2' => __( '<span style="color:#007f7f;">Grøn</span><br/>', 'meta-box' ),
                    '3' => __( '<span style="color:#7f0000;">Rød</span><br/>', 'meta-box' ),
				),
        ),

        array(
            'type' => 'divider',
            'id'   => 'fake_divider_id',
        ),


        array(
            'name'  => __( 'Tags baggrund', 'rwmb' ),
            'id'    => "tag_bg",
            'type'    => 'radio',
            'std'   => '0',
            'options' => array(
                '0' => __( '<span style="color:#999;">(ingen)</span><br/>', 'meta-box' ),
                '1' => __( '<span style="color:#333333;">Mørk</span><br/>', 'meta-box' ),
                '2' => __( '<span style="color:#ffffff;background:#666;padding:0px 2px;">Hvid</span><br/>', 'meta-box' ),
                '3' => __( '<span style="color:#007f7f;">Grøn</span><br/>', 'meta-box' ),
                '4' => __( '<span style="color:#7f0000;">Rød</span><br/>', 'meta-box' ),
				),
        ),
    ),
);


?>
