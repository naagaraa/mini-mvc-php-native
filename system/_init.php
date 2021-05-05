<?php
#set php.ini hardcode untuk hidden technology by php ini

ini_set('poweredByHeader', false);
ini_set('expose_php', 'off');
ini_set('display_errors', true);
ini_set('safe_mode', false);

// session dan cookie time expired
ini_set('session.gc_maxlifetime', 30*60); // expires in 30 minutes
ini_set('session.cookie_lifetime', 30*60); // 30 minutes
// ini_set('allow_url_fopen', true);
// ini_set('allow_url_include', 'on');

// spl autoload php atau bootstrap loading classname pada system/filesystem
spl_autoload_register(function ($class) {
	$class = explode("\\", $class);
	$class = end($class);
	if (file_exists(__DIR__ . '/filesystem/' . $class . '.php')) {
		require_once __DIR__ . '/filesystem/' . $class . '.php';
	}
	return false;
});




