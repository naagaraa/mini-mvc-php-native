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

// spl autoload php atau bootstrap loading classname pada folder core
spl_autoload_register(function ($class) {
	$class = explode("\\", $class);
	$class = end($class);
	// var_dump($class);
	// die;
	if (file_exists(__DIR__ . '/core/' . $class . '.php')) {
		require_once __DIR__ . '/core/' . $class . '.php';
	}
	return false;
});

// spl autoload php atau bootstrap loading classname pada folder routes
spl_autoload_register(function ($class) {
	$class = explode("\\", $class);
	$class = end($class);
	// var_dump($class);
	// die;
	if (file_exists(__DIR__ . '/routes/' . $class . '.php')) {
		require_once __DIR__ . '/routes/' . $class . '.php';
	}
	return false;
});