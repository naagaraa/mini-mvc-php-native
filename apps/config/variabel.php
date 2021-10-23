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
    require dirname(__DIR__, 2) . '/system/_500_error.html';
    exit;
}

//  url
define('ASSET', $system["ASSET"]);
define('URL', $system["URL"]);
define('BASEURL', $system["BASEURL"]);
// core
define('_ROOT_VIEW', $system["ROOT_VIEW"]);
define('_ROOT_MARKDOWN', $system["ROOT_MARKDOWN"]);
define('_ROOT_MODEL', $system["ROOT_MODEL"]);
define('_ROOT_ERROR_VIEW', $system["ROOT_ERROR_VIEW"]);
// directory
define('vendor', $system["VENDOR"]);
define('DIR_VENDOR', $system["DIR_VENDOR"]);
define('DIR_ROOT', $system["DIR_ROOT"]);
define('UPLOAD_F', $system["UPLOAD_F"]);
define('TEMP_F', $system["TEMP_F"]);
