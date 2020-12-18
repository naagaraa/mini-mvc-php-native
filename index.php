<?php

/**
 * Documentasi Code
 * 
 * Bootstraping adalah salah satu teknik untuk memanggil semua file pada direktori tertentu
 * menggunakan file init.php lalu di call melalui index.php 
 */

require 'vendor/autoload.php';
require_once 'apps/init.php';



/**
 *  Initialisasi Class App untuk menjalankan File App
 * 	App/core/App.php
 */

$App = new App;


/**
 *  panggil file init dan initialize dengan Filee App
 */