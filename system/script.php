<?php
/**
 * Handle untuk create automation file .env
 * untuk create env project sesuai folder project
 */

$path = dirname( __FILE__ , 2 );
$dir = explode('\\', $path);
$new_project = end($dir);

if (file_exists($path.'\.env')) {
$FileEnvirotmentVariabel = fopen($path.'\.env', "w") or die("Unable to open file!");
$txt ="# config file .env untuk configurasi pada file
# apps/config/database.php
# apps/config/constant.php

# configurasi Path here
APP_NAME=". $new_project ."
APP_HOST=http://localhost/
# APP_URL=http://localhost/mini-mvc-php-native/

# configurasi Database here
DB_HOST=localhost
DB_PORT=3306
DB_NAME=
DB_USERNAME=root
DB_PASSWORD=
    ";
    
fwrite($FileEnvirotmentVariabel, $txt);
fclose($FileEnvirotmentVariabel);

}else{
$FileEnvirotmentVariabel = fopen($path.'\.env', "w") or die("Unable to open file!");
$txt ="# config file .env untuk configurasi pada file
# apps/config/database.php
# apps/config/constant.php

# configurasi Path here
APP_NAME=". $new_project ."
APP_HOST=http://localhost/
# APP_URL=http://localhost/mini-mvc-php-native/

# configurasi Database here
DB_HOST=localhost
DB_PORT=3306
DB_NAME=
DB_USERNAME=root
DB_PASSWORD=
    ";
    
fwrite($FileEnvirotmentVariabel, $txt);
fclose($FileEnvirotmentVariabel);
}








