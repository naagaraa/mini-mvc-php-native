<?php
 /**
 *-----------------------------------------------------------------------------------------------
 * header response
 * @return header
 *-----------------------------------------------------------------------------------------------

 * Melakuka Required file bootstrap
 *
 */
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("X-Webkit-CSP: Deprecated");
header("X-Content-Security-Policy: Deprecated");
header("X-Permitted-Cross-Domain-Policies: none");
header("Keep-Alive: timeout=5, max=100");
header("Referrer-Policy: same-origin");
header("X-Powered-By: lua");

 /**
 *-----------------------------------------------------------------------------------------------
 * Boostrap APLIKASI
 * @return file
 *-----------------------------------------------------------------------------------------------

 * Melakuka Required file bootstrap
 *
 */
require_once __DIR__ . "//boostrap.php";

 /** *-------------------------------------------------------------------------------------------
 * About author or Developer
 *-----------------------------------------------------------------------------------------------
 *
 * @package	nagara/mini-mvc-php-native-project
 * @author	miyuki nagara as eka jaya nagara solo learner in internet with other good people
 * @copyright nagara
 * @license	https://github.com/naagaraa/mini-mvc-php-native/blob/master/LICENSE.MD	MIT License
 * @link	https://github.com/naagaraa/mini-mvc-php-native
 * @since	Version project beta - now
 *
 */

// var_dump($_ENV["DB_HOST"]);
// var_dump($_SERVER);


