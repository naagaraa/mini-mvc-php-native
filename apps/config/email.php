<?php
use MiniMVC\System\Mail\Mailer;
/**
 * ----------------------------------------------------------------------------------------
 * Documentation mail ( on development )
 * ----------------------------------------------------------------------------------------
 * untuk sending mail bisa config disini
 * 
 * @author nagara
 * @return function
 */



global $system;
if (empty($system)) {
    require dirname(__DIR__, 2) . "\\system\\error\\_500_error.html";
    exit;
}

 /**
 *------------------------------------------------------------------------------------------------------
 * CONFIG EMAIL SEND SMPTP
 *------------------------------------------------------------------------------------------------------
 * 
 */

$mail_system["MAIL_DEBUG"]           = ($system["MAIL_DEBUG"] == "true" )        ? TRUE                          : FALSE;
$mail_system["MAIL_MAILER"]          = $system["MAIL_MAILER"]                    ? $system["MAIL_MAILER"]        : "";
$mail_system["MAIL_HOST"]            = $system["MAIL_HOST"]                      ? $system["MAIL_HOST"]          : "";
$mail_system["MAIL_PORT"]            = $system["MAIL_PORT"]                      ? $system["MAIL_PORT"]          : "";
$mail_system["MAIL_USERNAME"]        = $system["MAIL_USERNAME"]                  ? $system["MAIL_USERNAME"]      : "";
$mail_system["MAIL_PASSWORD"]        = $system["MAIL_PASSWORD"]                  ? $system["MAIL_PASSWORD"]      : "";
$mail_system["MAIL_ENCRYPTION"]      = $system["MAIL_ENCRYPTION"]                ? $system["MAIL_ENCRYPTION"]    : "";
$mail_system["MAIL_FROM_ADDRESS"]    = $system["MAIL_FROM_ADDRESS"]              ? $system["MAIL_FROM_ADDRESS"]  : "";
$mail_system["MAIL_FROM_NAME"]       = $system["MAIL_FROM_NAME"]                 ? $system["MAIL_FROM_NAME"]     : "";


 /**
 *------------------------------------------------------------------------------------------------------
 * MAILER CLASS
 *------------------------------------------------------------------------------------------------------
 * buat object dan send data ke dalam class email
 * @return object
 */

$email = new Mailer($mail_system);

 /**
 *------------------------------------------------------------------------------------------------------
 * CALL SEND MAIL
 *------------------------------------------------------------------------------------------------------
 * sending data to email
 * @return email
 */

function smptp_mail($config = [])
{
    global $system;

    /**
     * get envirotment variabel config secara global
     */

    $mail_system["MAIL_DEBUG"]           = ($system["MAIL_DEBUG"] == "true" )        ? TRUE                          : FALSE;
    $mail_system["MAIL_MAILER"]          = $system["MAIL_MAILER"]                    ? $system["MAIL_MAILER"]        : "";
    $mail_system["MAIL_HOST"]            = $system["MAIL_HOST"]                      ? $system["MAIL_HOST"]          : "";
    $mail_system["MAIL_PORT"]            = $system["MAIL_PORT"]                      ? $system["MAIL_PORT"]          : "";
    $mail_system["MAIL_USERNAME"]        = $system["MAIL_USERNAME"]                  ? $system["MAIL_USERNAME"]      : "";
    $mail_system["MAIL_PASSWORD"]        = $system["MAIL_PASSWORD"]                  ? $system["MAIL_PASSWORD"]      : "";
    $mail_system["MAIL_ENCRYPTION"]      = $system["MAIL_ENCRYPTION"]                ? $system["MAIL_ENCRYPTION"]    : "";
    $mail_system["MAIL_FROM_ADDRESS"]    = $system["MAIL_FROM_ADDRESS"]              ? $system["MAIL_FROM_ADDRESS"]  : "";
    $mail_system["MAIL_FROM_NAME"]       = $system["MAIL_FROM_NAME"]                 ? $system["MAIL_FROM_NAME"]     : "";

    $email = new Mailer($mail_system);

    $data["to"]         = $config["To"] ? $config["To"] : "";
    $data["subject"]    = $config["Subject"]? $config["Subject"] : "";
    $data["message"]    = $config["Message"] ?  $config["Message"] : "";  
    $data["header"]     = $config["Header"] ? $config["Header"] : "";

    /**
     * Check email validation
     */

    // check string email
    if (empty($data["to"])) {
       echo "silahkan isi alamat emailnya terlebih dahulu<br>";
    }else{
        // validate email
        if (filter_var($data["to"] , FILTER_VALIDATE_EMAIL)) {
            // email valid 
            $email->send_mail($data );
            // echo  $data["to"] ."is a valid email address" ;
        } else {
        //   email tidak valid
        echo $data["to"] . " is not a valid email address";
        }
    } 
}



 /**
 *------------------------------------------------------------------------------------------------------
 * Example Format Untuk melakukan kirim email (on development)
 *------------------------------------------------------------------------------------------------------
 * sending data to email
 * 
 * smptp_mail([
 *  "To" => "hello@mail.com",
 *  "Subject" => "this is subject",
 *  "Message" => "this is message",
 *  "Header" => "this is header",
 * ]);
 * 
 * @author nagara 
 * @return array
 */