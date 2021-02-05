<?php

/**
 * Documentasi Code
 * 
 * Bootstraping adalah salah satu teknik untuk memanggil semua file pada direktori tertentu
 * menggunakan file init.php lalu di call melalui index.php 
 */

require 'vendor/autoload.php';

require_once 'apps/init.php';

// use naming or namespace
use MiniMvc\Apps\Core\Bootstraping\App;
use MiniMvc\Apps\Routes\Bootstraping\Web;
use MiniMvc\Apps\Routes\Bootstraping\Api;

/**
 *  Initialisasi Class App untuk menjalankan File App
 * 	App/core/App.php
 */
$Api = new Api;
$Route = new Web;
$App = new App;


/**
 *  panggil file init dan initialize dengan Filee App
 */