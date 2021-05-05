<?php

/** 
 * ----------------------------------------------------------------------------------------------
 * 	Variabel
 *  @author nagara 
 * ----------------------------------------------------------------------------------------------
 * 
 */

/** 
 * ----------------------------------------------------------------------------------------------
 * 	Development 
 *  beri commnet saja jika tidak diperlukan
 * ----------------------------------------------------------------------------------------------
 */

global $system;

if (empty($system)) {
    require dirname(__DIR__, 2) . '\system\_500_error.html';
    exit;
}

//  url
define('ASSET',$system["ASSET"]);
define('URL', $system["URL"]);
define('BASEURL', $system["BASEURL"]);
// core
define('_ROOT_VIEW', $system["ROOT_VIEW"] );
define('_ROOT_MODEL', $system["ROOT_MODEL"] );
define('_ROOT_ERROR_VIEW', $system["ROOT_ERROR_VIEW"]);
// directory
define('vendor', $system["VENDOR"] );
define('DIR_VENDOR', $system["DIR_VENDOR"] );
define('DIR_ROOT',$system["DIR_ROOT"] );
define('UPLOAD_F', $system["UPLOAD_F"] );
define('TEMP_F', $system["UPLOAD_F"] );

/** 
 * ----------------------------------------------------------------------------------------------
 * 	production format
 * beri commnet saja jika tidak diperlukan
 * ----------------------------------------------------------------------------------------------
 */

# base-Url untuk asset
// define('ASSET', $config['APP_HOST'] . 'public/');
# base-Url untuk URL
// define('URL', $config['APP_HOST'] );
# base-url untuh path
// define('BASEURL', $config['APP_HOST'] );

# vendor-URL-autoload
// $vendor = $_SERVER['DOCUMENT_ROOT'] . '/' .  'vendor/autoload.php';
// define('vendor', $vendor);

# directory vendor
// $DIR_VENDOR = $_SERVER['DOCUMENT_ROOT'] . '/' .  'vendor' . '/';
// $DIR_ROOT = $_SERVER['DOCUMENT_ROOT'] ;
// define('DIR_VENDOR', $DIR_VENDOR);
// define('DIR_ROOT', $DIR_ROOT);


# config constant folder upload
// define('UPLOAD_F', $_SERVER['DOCUMENT_ROOT'] . '/' .  'upload/');

