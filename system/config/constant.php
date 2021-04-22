<?php

if (empty($_ENV)) {
    require dirname(__DIR__, 1) .'\_500_error.html';
    exit;
}

# Application syst$system
$system["APP_NAME"] 	 	=  $_ENV["APP_NAME"] 			? $_ENV["APP_NAME"] 			: '';
$system["APP_HOST"] 	 	=  $_ENV["APP_HOST"] 			? $_ENV["APP_HOST"] 			: 'http://localhost/';

#app debug
$system["APP_DEBUG"] 	 	=  $_ENV["APP_DEBUG"] 			? $_ENV["APP_DEBUG"] 			: false;

# Mail
$system["MAIL_MAILER"] 	 	=  $_ENV["MAIL_MAILER"] 		? $_ENV["MAIL_MAILER"] 			: 'smtp';
$system["MAIL_HOST"] 	 	=  $_ENV["MAIL_HOST"] 			? $_ENV["MAIL_HOST"] 			: 'mailhog';
$system["MAIL_PORT"] 	 	=  $_ENV["MAIL_PORT"] 			? $_ENV["MAIL_PORT"] 			: '1025';
$system["MAIL_USERNAME"] 	=  $_ENV["MAIL_USERNAME"] 		? $_ENV["MAIL_USERNAME"] 		: '';
$system["MAIL_PASSWORD"] 	=  $_ENV["MAIL_PASSWORD"] 		? $_ENV["MAIL_PASSWORD"] 		: '';
$system["MAIL_ENCRYPTION"] 	=  $_ENV["MAIL_ENCRYPTION"] 	? $_ENV["MAIL_ENCRYPTION"] 		: '';
$system["MAIL_FROM_ADDRESS"]=  $_ENV["MAIL_FROM_ADDRESS"]	? $_ENV["MAIL_FROM_ADDRESS"] 	: '';
$system["MAIL_FROM_NAME"] 	=  $_ENV["MAIL_FROM_NAME"] 		? $_ENV["MAIL_FROM_NAME"] 		: 'mini-mvc-php-native';

# Database
$system["DB_HOST"] 		 	=  $_ENV["DB_HOST"] 			? $_ENV["DB_HOST"] 				: 'http://localhost/';
$system["DB_PORT"]		 	=  $_ENV["DB_PORT"] 			? $_ENV["DB_PORT"] 				: '3306';
$system["DB_NAME"]		 	=  $_ENV["DB_NAME"] 			? $_ENV["DB_NAME"] 				: '';
$system["DB_USERNAME"] 	 	=  $_ENV["DB_USERNAME"] 		? $_ENV["DB_USERNAME"] 			: 'root';
$system["DB_PASSWORD"] 	 	=  $_ENV["DB_PASSWORD"] 		? $_ENV["DB_PASSWORD"] 			: '';

# url configuration system 
$system["ASSET"] 	        = $system['APP_HOST'] . $system['APP_NAME'] . '/public/';
$system["URL"] 	            = $system['APP_HOST'] . $system['APP_NAME'] . '/';
$system["BASEURL"] 	        = $system['APP_HOST'] . $system['APP_NAME'] . '/';

#app static folder system
$system["ROOT_VIEW"] 	    = 'apps/views/';
$system["ROOT_MODEL"] 	    = 'apps/models/';
$system["ROOT_ERROR_VIEW"] 	= 'apps/error/pages/';

#app static folder system
$system["VENDOR"] 	        = $_SERVER['DOCUMENT_ROOT'] . '/' . $system['APP_NAME'] . '/vendor/autoload.php';
$system["DIR_VENDOR"] 	    = $_SERVER['DOCUMENT_ROOT'] . '/' . $system['APP_NAME'] . '/vendor/';
$system["DIR_ROOT"] 	    = $_SERVER['DOCUMENT_ROOT'] . '/' . $system['APP_NAME'];
$system["UPLOAD_F"] 	    = $_SERVER['DOCUMENT_ROOT'] . '/' . $system['APP_NAME'] . '/storage/';