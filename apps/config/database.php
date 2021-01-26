<?php

/** 
 * ----------------------------------------------------------------------------------------------
 * 	Database
 *  Author Nagara
 * ----------------------------------------------------------------------------------------------
 *  untuk configurasi pada database adalah sebagai berikut ini dibawah, database akan di init
 *  atau inisiati pada file .env apps/.env dan untuk contoh .env ada pada file
 *  .env-example
 * 
 */
$configuration = [
	"APP_NAME" 			=> $_ENV["APP_NAME"],
	"APP_HOST" 			=> $_ENV["APP_HOST"],
	"APP_URL" 			=> $_ENV["APP_URL"],
	"DB_HOST" 			=> $_ENV["DB_HOST"],
	"DB_PORT" 			=> $_ENV["DB_PORT"],
	"DB_NAME" 			=> $_ENV["DB_NAME"],
	"DB_USERNAME" 	=> $_ENV["DB_USERNAME"],
	"DB_PASSWORD" 	=> $_ENV["DB_PASSWORD"],
];

/**
 * ----------------------------------------------------------------------------------------------
 * Documentation Config @database
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
define('DB_HOST', ($configuration['DB_HOST']) 		? $configuration['DB_HOST'] 		: 'localhost');
define('DB_USER', ($configuration['DB_USERNAME']) ? $configuration['DB_USERNAME'] : 'root');
define('DB_PASS', ($configuration['DB_PASSWORD']) ? $configuration['DB_PASSWORD'] : '');
define('DB_NAME', ($configuration['DB_NAME']) 		? $configuration['DB_NAME'] 		: '');