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

# Database
$config["DB_HOST"] 		 	=  $_ENV["DB_HOST"] 			? $_ENV["DB_HOST"] 				: 'http://localhost/';
$config["DB_PORT"]		 	=  $_ENV["DB_PORT"] 			? $_ENV["DB_PORT"] 				: '3306';
$config["DB_NAME"]		 	=  $_ENV["DB_NAME"] 			? $_ENV["DB_NAME"] 				: '';
$config["DB_USERNAME"] 	 	=  $_ENV["DB_USERNAME"] 		? $_ENV["DB_USERNAME"] 			: 'root';
$config["DB_PASSWORD"] 	 	=  $_ENV["DB_PASSWORD"] 		? $_ENV["DB_PASSWORD"] 			: '';


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
define('DB_HOST', $config['DB_HOST']);
define('DB_USER', $config['DB_USERNAME']);
define('DB_PASS', $config['DB_PASSWORD']);
define('DB_NAME', $config['DB_NAME']);