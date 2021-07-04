<?php
/** 
 * ----------------------------------------------------------------------------------------------
 * 	Database
 *  @author nagara 
 * ----------------------------------------------------------------------------------------------
 *  untuk configurasi pada database adalah sebagai berikut ini dibawah, database akan di init
 *  atau inisiati pada file .env apps/.env dan untuk contoh .env ada pada file
 *  .env-example
 * 
 */
global $system;

if (empty($system)) {
    require dirname(__DIR__, 2) . "/system/error/_500_error.html";
    exit;
}


# Database
$config["DB_TYPE"] 		 	=  $system["DB_TYPE"] 			? $system["DB_TYPE"] 				: 'mysql';
$config["DB_HOST"] 		 	=  $system["DB_HOST"] 			? $system["DB_HOST"] 				: 'http://localhost/';
$config["DB_PORT"]		 	=  $system["DB_PORT"] 			? $system["DB_PORT"] 				: '3306';
$config["DB_NAME"]		 	=  $system["DB_NAME"] 			? $system["DB_NAME"] 				: '';
$config["DB_USERNAME"] 	 	=  $system["DB_USERNAME"] 		? $system["DB_USERNAME"] 			: 'root';
$config["DB_PASSWORD"] 	 	=  $system["DB_PASSWORD"] 		? $system["DB_PASSWORD"] 			: '';

/**
 * ----------------------------------------------------------------------------------------------
 * 	Database - constant
 *  @author nagara 
 * ----------------------------------------------------------------------------------------------
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

# config file .env untuk configurasi pada file
# apps/config/database.php

// config Database wrapper
define('DB_TYPE', $config['DB_TYPE']);
define('DB_HOST', $config['DB_HOST']);
define('DB_USER', $config['DB_USERNAME']);
define('DB_PASS', $config['DB_PASSWORD']);
define('DB_NAME', $config['DB_NAME']);