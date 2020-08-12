<?php

/**
 * Documentasi Code init
 * 
 * init atau initializa/ inisialisasi digunakan untuk memanggil semua file yang dibutuhkan 
 * dalam satu file yaitu init.php. bisa menggunakan method require_once atau include. 
 * 
 * semua inti atau core terletak pada folder apps/core. core adalah susunan yang
 * digunakan untuk mengatur Apps, membuat konsep MVC pada Controller, membuat
 * sistem database wrapper menggunakan PHPPDO: Data Object
 * 
 * APP 				: membuat aturan MVC 
 * Controller : function yang akan digunakan untuk
 * 							konsep MVC seperti view(), model(),
 * Database		: dibuat untuk membuat sistem PHPPDO
 * config			: digunakan untuk menbuat configurasi
 * 							URL dan database.
 */

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Database.php';
require_once 'config/config.php';
