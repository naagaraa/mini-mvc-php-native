<?php

/**
 * -----------------------------------------------------------------------------
 * Documentation constant
 * @author Nagara 
 * -----------------------------------------------------------------------------
 * pada file constant ini dilakukannya file configurasi variabel constant, variabel
 * constant yang ditetapkan akan bisa dipanggil secara global menggunaka ke global
 *
 */

# config file .env untuk configurasi pada file
# apps/config/constant.php

# get global variabel
# from system.config.system used system[]
global $system;

if (empty($system)) {
    require dirname(__DIR__, 2) . "/system/error/_500_error.html";
    exit;
}

# Application config
$config["APP_NAME"] 	 	=  '';
// $config["APP_NAME"] 	 	=  $system["APP_NAME"] 			    ? $system["APP_NAME"] 			    : 'mini-mvc-php-native';
$config["APP_HOST"] 	 	=  $system["APP_HOST"] 			    ? $system["APP_HOST"] 			    : 'http://localhost/';


# Mail
$config["MAIL_MAILER"] 	 	=  $system["MAIL_MAILER"] 		    ? $system["MAIL_MAILER"] 			: 'smtp';
$config["MAIL_HOST"] 	 	=  $system["MAIL_HOST"] 			? $system["MAIL_HOST"] 			    : 'mailhog';
$config["MAIL_PORT"] 	 	=  $system["MAIL_PORT"] 			? $system["MAIL_PORT"] 			    : '1025';
$config["MAIL_USERNAME"] 	=  $system["MAIL_USERNAME"] 		? $system["MAIL_USERNAME"] 		    : '';
$config["MAIL_PASSWORD"] 	=  $system["MAIL_PASSWORD"] 		? $system["MAIL_PASSWORD"] 		    : '';
$config["MAIL_ENCRYPTION"] 	=  $system["MAIL_ENCRYPTION"]   	? $system["MAIL_ENCRYPTION"] 		: '';
$config["MAIL_FROM_ADDRESS"]=  $system["MAIL_FROM_ADDRESS"]	    ? $system["MAIL_FROM_ADDRESS"] 	    : '';
$config["MAIL_FROM_NAME"] 	=  $system["MAIL_FROM_NAME"] 		? $system["MAIL_FROM_NAME"] 		: 'mini-mvc-php-native';

