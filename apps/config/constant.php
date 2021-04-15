<?php

/**
 * -----------------------------------------------------------------------------
 * Documentation constant
 * @author Nagara 
 * -----------------------------------------------------------------------------
 * pada file constant ini dilakukannya file configurasi variabel constant, variabel
 * constant yang ditetapkan akan bisa dipanggil secara global
 *
 * example define sebuah constant :
 * 
 * define('setnamaconstant', 'value');
 *
 * example untuk set url asset :
 * define('assets', 'localhost/project/public );
 *
 * example untuk set url vendor:
 * define('vendor', 'localhost/project/vendor );
 *
 * example untuk set root url atau baseurl :
 * define('url', 'localhost/project/ );
 */

# config file .env untuk configurasi pada file
# apps/config/constant.php

if (empty($_ENV)) {
    require dirname(__DIR__, 2) . '\system\badenvirotment.html';
    exit;
}

# Application config
$config["APP_NAME"] 	 	=  $_ENV["APP_NAME"] 			? $_ENV["APP_NAME"] 			: 'mini-mvc-php-native';
$config["APP_HOST"] 	 	=  $_ENV["APP_HOST"] 			? $_ENV["APP_HOST"] 			: 'http://localhost/';


# Mail
$config["MAIL_MAILER"] 	 	=  $_ENV["MAIL_MAILER"] 		? $_ENV["MAIL_MAILER"] 			: 'smtp';
$config["MAIL_HOST"] 	 	=  $_ENV["MAIL_HOST"] 			? $_ENV["MAIL_HOST"] 			: 'mailhog';
$config["MAIL_PORT"] 	 	=  $_ENV["MAIL_PORT"] 			? $_ENV["MAIL_PORT"] 			: '1025';
$config["MAIL_USERNAME"] 	=  $_ENV["MAIL_USERNAME"] 		? $_ENV["MAIL_USERNAME"] 		: '';
$config["MAIL_PASSWORD"] 	=  $_ENV["MAIL_PASSWORD"] 		? $_ENV["MAIL_PASSWORD"] 		: '';
$config["MAIL_ENCRYPTION"] 	=  $_ENV["MAIL_ENCRYPTION"] 	? $_ENV["MAIL_ENCRYPTION"] 		: '';
$config["MAIL_FROM_ADDRESS"]=  $_ENV["MAIL_FROM_ADDRESS"]	? $_ENV["MAIL_FROM_ADDRESS"] 	: '';
$config["MAIL_FROM_NAME"] 	=  $_ENV["MAIL_FROM_NAME"] 		? $_ENV["MAIL_FROM_NAME"] 		: 'mini-mvc-php-native';

/** 
 * ----------------------------------------------------------------------------------------------
 * 	Development 
 *  beri commnet saja jika tidak diperlukan
 * ----------------------------------------------------------------------------------------------
 */

# base-Url untuk asset
define('ASSET', $config['APP_HOST'] . $config['APP_NAME'] . '/public/');
# base-Url untuk URL
define('URL', $config['APP_HOST'] . $config['APP_NAME'] . '/');
# base-url untuh path
define('BASEURL', $config['APP_HOST'] . $config['APP_NAME'] . '/');

# root core
define('_ROOT_VIEW', 'apps/views/');
define('_ROOT_MODEL', 'apps/models/');
define('_ROOT_ERROR_VIEW', 'apps/error/pages/');

/** 
 * ----------------------------------------------------------------------------------------------
 * 	Constant in development
 * ----------------------------------------------------------------------------------------------
 */

# vendor-URL-autoload
define('vendor', $_SERVER['DOCUMENT_ROOT'] . '/' . $config['APP_NAME'] . '/vendor/autoload.php');

# directory vendor
define('DIR_VENDOR', $_SERVER['DOCUMENT_ROOT'] . '/' . $config['APP_NAME'] . '/vendor/');
define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/' . $config['APP_NAME']);

# config constant folder upload
define('UPLOAD_F', $_SERVER['DOCUMENT_ROOT'] . '/' . $config['APP_NAME'] . '/upload/');



/** 
 * ----------------------------------------------------------------------------------------------
 * 	production format
 * beri commnet saja jika tidak diperlukan
 * ----------------------------------------------------------------------------------------------
 */

# base-Url untuk asset
// define('ASSET', $config['APP_HOST'] . 'public/');
# base-Url untuk URL
// define('URL', $config['APP_HOST'] );
# base-url untuh path
// define('BASEURL', $config['APP_HOST'] );

/** 
 * ----------------------------------------------------------------------------------------------
 * 	Constant on production
 *  beri commnet saja jika tidak diperlukan
 * ----------------------------------------------------------------------------------------------
 */


# vendor-URL-autoload
// $vendor = $_SERVER['DOCUMENT_ROOT'] . '/' .  'vendor/autoload.php';
// define('vendor', $vendor);

# directory vendor
// $DIR_VENDOR = $_SERVER['DOCUMENT_ROOT'] . '/' .  'vendor' . '/';
// $DIR_ROOT = $_SERVER['DOCUMENT_ROOT'] ;
// define('DIR_VENDOR', $DIR_VENDOR);
// define('DIR_ROOT', $DIR_ROOT);


# config constant folder upload
// define('UPLOAD_F', $_SERVER['DOCUMENT_ROOT'] . '/' .  'upload/');
