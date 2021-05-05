<?php
/**
 * ----------------------------------------------------------------------------------------
 * Documentation mail ( on development )
 * ----------------------------------------------------------------------------------------
 * untuk sending mail bisa config disini
 * 
 * @author nagara
 * @return function
 */

use MiniMVC\System\Mail\Mailer;

global $system;

if (empty($system)) {
    require dirname(__DIR__, 2) . "\\system\\error\\_500_error.html";
    exit;
}


var_dump($system);


$email = new Mailer('bacot');
var_dump($email);



die;