<?php


$emne_meta_config = array(
   'id' => 'emne_engelsk',
   'title' => 'Engelsk oversættelse',
   'pages' => array('emne'),
   'context' => 'normal',
   'fields' => array(),
   'local_images' => false,
   'use_with_theme' => true,
);

$emne_meta = new Tax_Meta_Class($emne_meta_config);
$emne_meta->addText('emne_engelsk',array('name'=> 'Indstil engelsk term for emne'));
$emne_meta->Finish();

?>
