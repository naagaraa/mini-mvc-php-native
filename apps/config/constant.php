<?php

/**
 * -----------------------------------------------------------------------------
 * Documentation @constant
 * Author : Nagara
 * -----------------------------------------------------------------------------
 * 
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

$configuration = [
	"APP_NAME" => $_ENV["APP_NAME"],
	"APP_HOST" => $_ENV["APP_HOST"],
	"DB_HOST" => $_ENV["DB_HOST"],
	"DB_PORT" => $_ENV["DB_PORT"],
	"DB_NAME" => $_ENV["DB_NAME"],
	"DB_USERNAME" => $_ENV["DB_USERNAME"],
	"DB_PASSWORD" => $_ENV["DB_PASSWORD"],
];

/** 
 * ----------------------------------------------------------------------------------------------
 * 	Development 
 *  beri commnet saja jika tidak diperlukan
 * ----------------------------------------------------------------------------------------------
 */

# base-Url untuk asset
define('ASSET', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/public/');
# base-Url untuk URL
define('URL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');
# base-url untuh path
define('BASEURL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');

/** 
 * ----------------------------------------------------------------------------------------------
 * 	Constant in debelopment
 * ----------------------------------------------------------------------------------------------
 */

# vendor-URL-autoload
$vendor = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/vendor/autoload.php';
define('vendor', $vendor);

# directory vendor
$DIR_VENDOR = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/vendor' . '/';
$DIR_ROOT = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'];
define('DIR_VENDOR', $DIR_VENDOR);
define('DIR_ROOT', $DIR_ROOT);


# config constant folder upload
define('UPLOAD_F', $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/');



/** 
 * ----------------------------------------------------------------------------------------------
 * 	production format
 * beri commnet saja jika tidak diperlukan
 * ----------------------------------------------------------------------------------------------
 */

# base-Url untuk asset
// define('ASSET', $configuration['APP_HOST'] . 'public/');
# base-Url untuk URL
// define('URL', $configuration['APP_HOST'] );
# base-url untuh path
// define('BASEURL', $configuration['APP_HOST'] );

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





