<?php
// spl autoload php atau bootstrap loading classname pada system/mail
spl_autoload_register(function ($class) {
	$class = explode("\\", $class);
	$class = end($class);
	if (file_exists(__DIR__ . '/mail/' . $class . '.php')) {
		require_once __DIR__ . '/mail/' . $class . '.php';
	}
	return false;
});