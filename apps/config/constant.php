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
	"APP_URL" => $_ENV["APP_URL"],
	"DB_HOST" => $_ENV["DB_HOST"],
	"DB_PORT" => $_ENV["DB_PORT"],
	"DB_NAME" => $_ENV["DB_NAME"],
	"DB_USERNAME" => $_ENV["DB_USERNAME"],
	"DB_PASSWORD" => $_ENV["DB_PASSWORD"],
];


/** 
 * ----------------------------------------------------------------------------------------------
 * 	Development
 * ----------------------------------------------------------------------------------------------
 */

// base-Url untuk asset
define('ASSET', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/public');
// base-Url untuk URL
define('URL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');
// base-url untuh path
define('BASEURL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');


/** 
 * ----------------------------------------------------------------------------------------------
 * 	production beta 
 * ----------------------------------------------------------------------------------------------
 */

// // base-Url untuk asset
// define('ASSET', $configuration['APP_URL'] . '/public');
// // base-Url untuk URL
// define('URL', $configuration['APP_URL'] . '/');
// // base-url untuh path
// define('BASEURL', $configuration['APP_URL'] . '/');


/** 
 * ----------------------------------------------------------------------------------------------
 * 	Constant
 * ----------------------------------------------------------------------------------------------
 */


// vendor-URL-autoload
$vendor = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/vendor/autoload.php';
define('vendor', $vendor);

// directory vendor
$DIR_VENDOR = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/vendor' . '/';
$DIR_ROOT = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'];
define('DIR_VENDOR', $DIR_VENDOR);
define('DIR_ROOT', $DIR_ROOT);


// config folder upload
define("PathCover", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/contents/cover/');
define("PathImage", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/contents/cover/');