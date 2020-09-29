<?php

/**
 * Documentation @config
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


// base Url untuk asset
define('BASE_URL', 'http://localhost/mini-mvc-phpnative/public');
// base Url untuk URL
define('URL', 'http://localhost/mini-mvc-phpnative/');


// Constant untuk folder pada Controller
define('controller_user', 'user');
define('controller_admin', 'admin');


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
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', '');