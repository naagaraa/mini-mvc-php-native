<?php

/**
 * Documentation
 * @author eka jaya nagara 
 * ini ada configurasi core system
 */
if (empty($_ENV)) {
    require dirname(__DIR__, 1) . "/error/_500_error.html";
    exit;
}

# Application syst$system
$system["APP_NAME"]          =  $_ENV["APP_NAME"]             ? $_ENV["APP_NAME"]             : '';
$system["APP_HOST"]          =  $_ENV["APP_HOST"]             ? $_ENV["APP_HOST"]             : 'http://localhost/';

#app debug
$system["APP_DEBUG"]          =  $_ENV["APP_DEBUG"]             ? $_ENV["APP_DEBUG"]             : false;

# Mail
$system["MAIL_DEBUG"]          =  $_ENV["MAIL_DEBUG"]             ? $_ENV["MAIL_DEBUG"]             : 'true';
$system["MAIL_MAILER"]          =  $_ENV["MAIL_MAILER"]         ? $_ENV["MAIL_MAILER"]             : 'smtp';
$system["MAIL_HOST"]          =  $_ENV["MAIL_HOST"]             ? $_ENV["MAIL_HOST"]             : 'mailhog';
$system["MAIL_PORT"]          =  $_ENV["MAIL_PORT"]             ? $_ENV["MAIL_PORT"]             : '1025';
$system["MAIL_USERNAME"]     =  $_ENV["MAIL_USERNAME"]         ? $_ENV["MAIL_USERNAME"]         : '';
$system["MAIL_PASSWORD"]     =  $_ENV["MAIL_PASSWORD"]         ? $_ENV["MAIL_PASSWORD"]         : '';
$system["MAIL_ENCRYPTION"]     =  $_ENV["MAIL_ENCRYPTION"]     ? $_ENV["MAIL_ENCRYPTION"]         : '';
$system["MAIL_FROM_ADDRESS"] =  $_ENV["MAIL_FROM_ADDRESS"]    ? $_ENV["MAIL_FROM_ADDRESS"]     : '';
$system["MAIL_FROM_NAME"]     =  $_ENV["MAIL_FROM_NAME"]         ? $_ENV["MAIL_FROM_NAME"]         : 'mini-mvc-php-native';

# Database
$system["DB_TYPE"]              =  $_ENV["DB_TYPE"]             ? $_ENV["DB_TYPE"]                 : 'mysql';
$system["DB_HOST"]              =  $_ENV["DB_HOST"]             ? $_ENV["DB_HOST"]                 : 'http://localhost/';
$system["DB_PORT"]             =  $_ENV["DB_PORT"]             ? $_ENV["DB_PORT"]                 : '3306';
$system["DB_NAME"]             =  $_ENV["DB_NAME"]             ? $_ENV["DB_NAME"]                 : '';
$system["DB_USERNAME"]          =  $_ENV["DB_USERNAME"]         ? $_ENV["DB_USERNAME"]             : 'root';
$system["DB_PASSWORD"]          =  $_ENV["DB_PASSWORD"]         ? $_ENV["DB_PASSWORD"]             : '';


# application mode
if ($_ENV["APP_ENV"] == "development") {
    if ($_SERVER["HTTP_HOST"] == "localhost") {
        require dirname(__DIR__, 1) . "//error//_warning_local.html";
        exit;
    }
    # url configuration system shell command
    $system["ASSET"]             = "http://" . $_SERVER['HTTP_HOST'] . '/public/';
    $system["URL"]                 = "http://" . $_SERVER['HTTP_HOST'] . "/";
    $system["BASEURL"]             = "http://" . $_SERVER['HTTP_HOST'] . "/";
} else if ($_ENV["APP_ENV"] == "local" || $_ENV["APP_ENV"] == "production") {
    # url configuration system 
    if ($_SERVER["HTTP_HOST"] == "127.0.0.1:9000") {
        require dirname(__DIR__, 1) . "//error//_warning_development.html";
        exit;
    } else {
        $system["ASSET"]             = $system['APP_HOST'] . $system['APP_NAME'] . '/public/';
        $system["URL"]                 = $system['APP_HOST'] . $system['APP_NAME'] . '/';
        $system["BASEURL"]             = $system['APP_HOST'] . $system['APP_NAME'] . '/';
    }
}

#main tenance mode
if ($_ENV["APP_MAINTENANCE"] == "on") {
    require dirname(__DIR__, 1) . "/error/_maintenance.html";
    exit;
}

#app static folder system
$system["ROOT_VIEW"]         = 'apps/views/';
$system["ROOT_MARKDOWN"]     = 'apps/views/markdown/';
$system["ROOT_MODEL"]         = 'apps/models/';
$system["ROOT_ERROR_VIEW"]     = 'apps/error/pages/';

#app static folder system
$system["VENDOR"]             = $_SERVER['DOCUMENT_ROOT'] . '/' . $system['APP_NAME'] . '/vendor/autoload.php';
$system["DIR_VENDOR"]         = $_SERVER['DOCUMENT_ROOT'] . '/' . $system['APP_NAME'] . '/vendor/';
$system["DIR_ROOT"]         = $_SERVER['DOCUMENT_ROOT'] . '/' . $system['APP_NAME'];
$system["UPLOAD_F"]         = $_SERVER['DOCUMENT_ROOT'] . '/' . $system['APP_NAME'] . '/storage/';
$system["TEMP_F"]             = $_SERVER['DOCUMENT_ROOT'] . '/' . $system['APP_NAME'] . '/temp/';
