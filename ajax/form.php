<?php 

// vi skal ikke bruger header, men WP's funktionsbibliotek
define('WP_USE_THEMES', false); 

// Vores retur encodes til json, så det er nemt at bruge i javascript.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: application/json');

// Hent wp-load, så vi får mulighed for at bruge wordpress' funktionsarkiv
require '../../../../wp-load.php';

// Klargør response array til senere json_encode();
$response = array();

// Nonce check
$retrieved_nonce = $_REQUEST['nonce_form'];
// $response['nonce_verify'] = wp_verify_nonce($retrieved_nonce, 'smamo_nonce_this' );
// $response['nonce'] = wp_strip_all_tags($_REQUEST['nonce_form']);
if(!wp_verify_nonce($retrieved_nonce, 'smamo_nonce_this' )){
    $response['error'] = 'Nonce check error.';
    echo json_encode($response);
    exit;
}

// reCaptcha
$siteKey = '6LdKBQoTAAAAAMaqbU4Chf4FF6_ECAzU5hc68tbH';
$secret = '6LdKBQoTAAAAAMSLoJeQ4w4VdPWH8BcBDt5F4SN7';

require_once __DIR__ . '/../grc/autoload.php';
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
if (!$resp->isSuccess()){
    
    $response['error'] = 'Du skal bekræfte at du ikke er en robot.';
    echo json_encode($response);
    exit;
    
}



// Indstil formdata
$formdata = array(
    
    'locale' => (isset($_POST['locale'])) ? wp_strip_all_tags($_POST['locale']) : false,
    
    'post' => (isset($_POST['post_id'])) ? get_post(wp_strip_all_tags($_POST['post_id'])) : false,
    
    'email_rec' => (isset($_POST['email_rec']) && is_email($_POST['email_rec']) ) ? wp_strip_all_tags($_POST['email_rec']) : false,

    'navn' => (isset($_POST['navn'])) ? wp_strip_all_tags($_POST['navn']) : false,
    
    'email' => (isset($_POST['email']) && is_email($_POST['email']) ) ? wp_strip_all_tags($_POST['email']) : false,
    
    'telefon' => (isset($_POST['telefon'])) ? wp_strip_all_tags($_POST['telefon']) : false,
    
    'kommentar' => (isset($_POST['kommentar'])) ? esc_textarea($_POST['kommentar']) : false,
    
);




// Indstil fejlmeddelelser
$error_msgs = array(
    
    'locale'   => 'locale not set',
    
    'post' => array(
        'da_DK' => 'Der opstod en fejl under indlæsning af formularens data. Prøv venligst igen',
        'en_US' => 'An unexpected error occured, please try again'
    ),
    
    'email_rec' => array(
        'da_DK' => 'Modtageradresse er ikke indstillet korrekt',
        'en_US' => 'Receiver address not received'
    ),
    
    'navn' => array(
        'da_DK' => 'Indtast venligst dit navn',
        'en_US' => 'Please enter your name'
    ),
    
    'email' => array(
        'da_DK' => 'Indtast venligst en gyldig emailadresse',
        'en_US' => 'Please enter a valid email email address'
    ),
    
    'telefon' => array(
        'da_DK' => 'Indtast et telefonnummer',
        'en_US' => 'Please enter a phone number'
    ),
    
    'kommentar' => array(
        'da_DK' => 'Indtast venligst en kommmentar',
        'en_US' => 'Please add a comment'
    )
);

// Afbryd ved manglende data
if(!$formdata['locale']){

    $response['error'] = $error_msgs['locale'];
    echo json_encode($response);
    exit;

}


foreach($formdata as $key => $val){
    
    if(!$val && $key !== 'kommentar'){
        
        $response['error'] = $error_msgs[$key][$locale];
        echo json_encode($response);
        exit;
    }
    
}

function sendEmail($from,$to,$subject,$message){
	$header = "From:".$from."\r\n"; 
	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-Type: text/html; charset=utf-8\r\n"; 
	$header.= "X-Priority: 1\r\n"; 
	wp_mail($to, $subject, $message, $header);
}

$titel = 'Ny meddelelse fra '.$formdata['navn'].' : "'.apply_filters('the_title',$formdata['post']->post_title).'"';

$body = 'Der er modtaget en ny meddelelse på siden "'.apply_filters('the_title',$formdata['post']->post_title).'" på '.get_bloginfo('url').'<br/>';
$body .= '--------------------<br/><br/>';
$body .= '<strong>Modtaget data</strong><br/>';
$body .= 'Navn: '.$formdata['navn'].'<br/>';
$body .= 'E-mail: '.$formdata['email'].'<br/>';
$body .= 'Telefon: '.$formdata['telefon'].'<br/>';
$body .= 'Locale: '.$formdata['locale'].'<br/>';
$body .= '<br/>Kommentar:<br/><br/>'.nl2br($formdata['kommentar']).'<br/><br/>';
$body .= '--------------------<br/><br/>';
$body .= 'Venlig hilsen serveren';


$kopi = ($formdata['locale'] == 'da_DK') ? 'Kopi: ' : 'Copy: ' ;

// Send mail til email_rec
sendEmail($formdata['email'],$formdata['email_rec'],$titel,$body);
sleep(1);
// Send mail til email
sendEmail($formdata['email_rec'],$formdata['email'],$kopi.$titel,$body);


// Send succesmeddelelse
$response['success'] = ($formdata['locale'] == 'da_DK') ? 'Tak for din henvendelse' : 'Thank you for your message' ;
echo json_encode($response);

?>