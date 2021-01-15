<?php

/**
 * -------------------------------------------------------------------------------------------
 * Documentasi Code init
 * -------------------------------------------------------------------------------------------
 * 
 * init atau initializa/ inisialisasi digunakan untuk memanggil semua file yang dibutuhkan 
 * dalam satu file yaitu init.php. bisa menggunakan method require_once atau include. 
 * 
 * semua inti atau core terletak pada folder apps/core. core adalah susunan yang
 * digunakan untuk mengatur Apps, membuat konsep MVC pada Controller, membuat
 * sistem database wrapper menggunakan PHPPDO: Data Object
 * 
 */

/**
 * -------------------------------------------------------------------------------------------
 * Load Dotenv Library vlucas/phpdotenv
 * -------------------------------------------------------------------------------------------
 
 * 
 * $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
 * $dotenv->load();
 * 
 * keterangan :
 *  __DIR__ => directiory saat ini
 * 
 */


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * --------------------------------------------------------------------------------------------
 *  Documentasi Code
 * --------------------------------------------------------------------------------------------
 * 
 * APP 				: membuat aturan MVC 
 * Controller : function yang akan digunakan untuk
 * 							konsep MVC seperti view(), model(),
 * Database		: dibuat untuk membuat sistem PHPPDO
 * config			: digunakan untuk menbuat configurasi
 * 							URL dan database.
 */

include 'config/config.php';
// include 'config/route.php';
// include 'core/Routes.php';
// include 'core/Controller.php';
// include 'core/Database.php';
// include 'core/App.php';
// include 'routes/Route.php';

// spl autoload php atau bootstrap loading classname pada folder core
spl_autoload_register(function ($class) {
	$class = explode("\\", $class);
	$class = end($class);
	require_once __DIR__ . '/core' . '/' . $class . '.php';
});