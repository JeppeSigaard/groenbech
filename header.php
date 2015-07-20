<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
<title><?php wp_title( ' · ', true, 'right' ); ?></title>
<link rel="icon" href="<?php echo str_replace('en/','', content_url()); ?>/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo str_replace('en/','', content_url()); ?>/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
<?php 
$ct_form_active = get_post_meta(get_the_ID(),'ct-form-active',true);
if($ct_form_active && $ct_form_active == '1') :
?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php endif; ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4069868-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<?php include 'libs/includes/header.php'; ?>
