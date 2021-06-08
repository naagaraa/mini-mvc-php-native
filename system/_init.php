<?php

// var_dump(__DIR__ . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.php");
if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.php")) {
	require_once __DIR__ . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.php";
}else{
	echo "config file system tidak ditemukan";
}

// spl autoload php atau bootstrap loading classname pada system/mail
spl_autoload_register(function ($class) {
	$class = explode("\\", $class);
	$class = end($class);
	if (file_exists(__DIR__ . '/mail/' . $class . '.php')) {
		require_once __DIR__ . '/mail/' . $class . '.php';
	}
	return false;
});

// spl autoload php atau bootstrap loading classname pada system/filesystem
spl_autoload_register(function ($class) {
	$class = explode("\\", $class);
	$class = end($class);
	if (file_exists(__DIR__ . '/filesystem/' . $class . '.php')) {
		require_once __DIR__ . '/filesystem/' . $class . '.php';
	}
	return false;
});




