<?php
ini_set('display_errors', 'off');
error_reporting(E_ALL);
define('COMP_EMAIL', 'info@cornerstonepharmacyrx.com'); // clients email

define('SMTP_ENCRYPTION', 'off'); // TLS, SSL or off
define('SMTP_PORT', 587); // SMPT port number 587 or default
define('COMP_NAME', 'Cornerstone Pharmacy'); // company name
define('MAIL_TYPE', 2); // 1 - html, 2 - txt
define('MAIL_DOMAIN', 'w01052.proweaver.site'); // company domain
define('DEV_MODE',true); //if false = launched account , true = pages account

// Update it using a working google Site key
$recaptcha_sitekey = '6LePnNkcAAAAAA2tgynVW-MRbTXvF5VXBVzpfX91';
// Update it using a working google Privite key
$recaptcha_privite = '6LePnNkcAAAAAHWdlaNQxCxbqalASkJP39wh9sNw';


// do not edit
$subject = COMP_NAME . " [" . $formname . "]";
$template = 'template';
$to_name = NULL;
$from_email = 'onlineform@proweaver.net';
$from_name = 'Message From Your Site';
$attachments = array();

// testing here
$testform = true;
if($testform){
	// when using cc and/or bcc use string type to_email
	// cc and/or bcc can contain string or array type data
	// $to_email 	= 'qa@proweaver.net';
	$to_email 	= array('qatest@proweaver.net');
	$cc = '';
	$bcc = '';

	// when using multiple to_email use array type
	// cc and/or bcc will not be worked
	//$to_email 	= array('qa@proweaver.net', 'info@proweaver.com');
}else{
	$to_email 	= array('info@cornerstonepharmacyrx.com');
	$cc = '';
	$bcc = '';
}
