<?php

/**
 * -----------------------------------------------------------------------------
 * Documentation @config
 * -----------------------------------------------------------------------------
 * 
 * untuk set base_url atau membuat url rootnya dengan membuat definenya
 * 
 * example root url :
 * 
 * www.mycompany.com 			=> pada live server
 * localhost/project 			=> pada local server
 * 127.0.0.1/project			=> pada local serve
 * 192.168.1.12/project		=> pada local serve
 * 
 * define('setnama', 'lokasi root server');
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
$configuration = [
	"APP_NAME" 			=> $_ENV["APP_NAME"],
	"APP_HOST" 			=> $_ENV["APP_HOST"],
	"APP_URL" 			=> $_ENV["APP_URL"],
	"DB_HOST" 			=> $_ENV["DB_HOST"],
	"DB_PORT" 			=> $_ENV["DB_PORT"],
	"DB_NAME" 			=> $_ENV["DB_NAME"],
	"DB_USERNAME" 	=> $_ENV["DB_USERNAME"],
	"DB_PASSWORD" 	=> $_ENV["DB_PASSWORD"]
];


// base-Url untuk asset
define('ASSET', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/public');
// base-Url untuk URL
define('URL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');
// base-url untuh path
define('BASEURL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');
// vendor-URL
$vendor = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/vendor/autoload.php';
define('vendor', $vendor);


// Constant untuk folder pada Controller
define('controller_user', 'user');
define('controller_admin', 'admin');

// dir vendor
$DIR_VENDOR = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/vendor' . '/';
$DIR_ROOT = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'];
define('DIR_VENDOR', $DIR_VENDOR);
define('DIR_ROOT', $DIR_ROOT);
/**
 * Documentation Config @database
 * 
 * untuk configurasi database digunakan pada file apps/config/config.php
 * sesuaikan database mysql yang digunakan :
 * DB_HOST			=> nama host
 * DB_USER			=> user pada database
 * DB_PASSOWRD	=> password pada Database
 * DB_NAMA			=> nama Database
 * 
 * 
 * example
 * define('DB_HOST', 'localhost');
 * define('DB_USER', 'root');
 * define('DB_PASS', '');
 * define('DB_NAME', 'db_content');
 */


// config Database wrapper
define('DB_HOST', $configuration['DB_HOST']);
define('DB_USER', $configuration['DB_USERNAME']);
define('DB_PASS', $configuration['DB_PASSWORD']);
define('DB_NAME', $configuration['DB_NAME']);