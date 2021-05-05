<?php
namespace MiniMVC\System\Mail;
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**
 * -------------------------------------------------------------------------
 * Documentation MAILER
 * @author miyuki nagara as eka jaya nagara
 * -------------------------------------------------------------------------
 * 
 * core system untuk sending email SMPTP menggunakan Librarie PHP MAILER
 * (on development)
 * 
 */
class Mailer {
    // server settings
    private $mail_debug = true;

    private $mail_mailer ="smptp";
    private $mail_host = "smtp.example.com";
    private $mail_port = 587;
    private $mail_username = "user@example.com";
    private $mail_password = "secret";

    // recepients setting
    private $mail_from_address;

    //encryption
    private $mail_encryption ;

    public function __construct($config = []) {
        # contructor fucntion
        $this->mail_debug = $config["MAIL_DEBUG"];
        $this->mail_mailer = $config["MAIL_MAILER"];
        $this->mail_host = $config["MAIL_HOST"];
        $this->mail_username = $config["MAIL_USERNAME"];
        $this->mail_password = $config["MAIL_PASSWORD"];
        $this->mail_port = $config["MAIL_PORT"];

        $this->mail_from_address = $config["MAIL_FROM_ADDRESS"];
        $this->mail_encryption = $config["MAIL_ENCRYPTION"];
    }

/**
 * -------------------------------------------------------------------------
 * send mail
 * @author nagara
 * @return email send
 * -------------------------------------------------------------------------
 */
    public function send_mail($email = [])
    {
        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $debug = ($this->mail_debug == true) ? SMTP::DEBUG_SERVER : SMTP::DEBUG_OFF ;

            $mail->SMTPDebug = $debug;                                  //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $this->mail_host;                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $this->mail_username;                   //SMTP username
            $mail->Password   = $this->mail_password;                   //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = $this->mail_port;                       //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
            //Recipients
            $mail->setFrom($this->mail_from_address, 'Mailer');
            $mail->addAddress($email["to"], 'Joe User');     //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
    
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $email["subject"];
            $mail->Body    = $this->template_email_verfication($email["message"], $email["subject"]);
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
           //send the message, check for errors
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message sent!';
            }

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

/**
 * -------------------------------------------------------------------------
 * Template email verfication
 * @author nagara
 * @return String
 * ------------------------------------------------------------------------- 
 */
    function template_email_verfication($message = null, $subject = null)
    {
        $template = '
        <!DOCTYPE html>
        <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
            xmlns:o="urn:schemas-microsoft-com:office:office">
        
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="x-apple-disable-message-reformatting"> 
            <title>nothing</title> 
        
            <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        
            <!-- CSS Reset : BEGIN -->
            <style>
                /* What it does: Remove spaces around the email design added by some email clients. */
                /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
                html,
                body {
                    margin: 0 auto !important;
                    padding: 0 !important;
                    height: 100% !important;
                    width: 100% !important;
                    background: #f1f1f1;
                }
        
                /* What it does: Stops email clients resizing small text. */
                * {
                    -ms-text-size-adjust: 100%;
                    -webkit-text-size-adjust: 100%;
                }
        
                /* What it does: Centers email on Android 4.4 */
                div[style*="margin: 16px 0"] {
                    margin: 0 !important;
                }
        
                /* What it does: Stops Outlook from adding extra spacing to tables. */
                table,
                td {
                    mso-table-lspace: 0pt !important;
                    mso-table-rspace: 0pt !important;
                }
        
                /* What it does: Fixes webkit padding issue. */
                table {
                    border-spacing: 0 !important;
                    border-collapse: collapse !important;
                    table-layout: fixed !important;
                    margin: 0 auto !important;
                }
        
                /* What it does: Uses a better rendering method when resizing images in IE. */
                img {
                    -ms-interpolation-mode: bicubic;
                }
        
                /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
                a {
                    text-decoration: none;
                }
        
                /* What it does: A work-around for email clients meddling in triggered links. */
                *[x-apple-data-detectors],
                /* iOS */
                .unstyle-auto-detected-links *,
                .aBn {
                    border-bottom: 0 !important;
                    cursor: default !important;
                    color: inherit !important;
                    text-decoration: none !important;
                    font-size: inherit !important;
                    font-family: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                }
        
                /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
                .a6S {
                    display: none !important;
                    opacity: 0.01 !important;
                }
        
                /* What it does: Prevents Gmail from changing the text color in conversation threads. */
                .im {
                    color: inherit !important;
                }
        
                
                img.g-img+div {
                    display: none !important;
                }
        
              
                /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
                @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                    u~div .email-container {
                        min-width: 320px !important;
                    }
                }
        
                /* iPhone 6, 6S, 7, 8, and X */
                @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                    u~div .email-container {
                        min-width: 375px !important;
                    }
                }
        
                /* iPhone 6+, 7+, and 8+ */
                @media only screen and (min-device-width: 414px) {
                    u~div .email-container {
                        min-width: 414px !important;
                    }
                }
            </style>
        
        
           
            <style>
                .primary {
                    background: #7d30e3;
                }
        
                .bg_white {
                    background: #ffffff;
                }
        
                .bg_light {
                    background: #fafafa;
                }
        
                .bg_black {
                    background: #000000;
                }
        
                .bg_dark {
                    background: rgba(0, 0, 0, .8);
                }
        
                .email-section {
                    padding: 2.5em;
                }
        
                /*BUTTON*/
                .btn {
                    padding: 10px 15px;
                    display: inline-block;
                }
        
                .btn.btn-primary {
                    border-radius: 5px;
                    background: #000000;
                    color: #ffffff;
                }
        
                .btn.btn-white {
                    border-radius: 5px;
                    background: #ffffff;
                    color: #000000;
                }
        
                .btn.btn-white-outline {
                    border-radius: 5px;
                    background: transparent;
                    border: 1px solid #fff;
                    color: #fff;
                }
        
                .btn.btn-black-outline {
                    border-radius: 0px;
                    background: transparent;
                    border: 2px solid #000;
                    color: #000;
                    font-weight: 700;
                }
        
                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                    font-family: Lato, sans-serif;
                    color: #000000;
                    margin-top: 0;
                    font-weight: 400;
                }
        
                body {
                    font-family: Lato, sans-serif;
                    font-weight: 400;
                    font-size: 15px;
                    line-height: 1.8;
                    color: rgba(0, 0, 0, .4);
                }
        
                a {
                    color: #000000;
                }
        
                table {}
        
                /*LOGO*/
        
                .logo h1 {
                    margin: 0;
                }
        
                .logo h1 a {
                    color: #020202;
                    font-size: 24px;
                    font-weight: 700;
                    font-family: Lato, sans-serif;
                }
        
                /*HERO*/
                .hero {
                    position: relative;
                    z-index: 0;
                }
        
                .hero .text {
                    color: rgba(0, 0, 0, .3);
                }
        
                .hero .text h2 {
                    color: #000;
                    font-size: 40px;
                    margin-bottom: 0;
                    font-weight: 400;
                    line-height: 1.4;
                }
        
                .hero .text h3 {
                    font-size: 24px;
                    font-weight: 300;
                }
        
                .hero .text h2 span {
                    font-weight: 600;
                    color: #c830e3;
                }
        
        
                /*HEADING SECTION*/
                .heading-section {}
        
                .heading-section h2 {
                    color: #000000;
                    font-size: 28px;
                    margin-top: 0;
                    line-height: 1.4;
                    font-weight: 400;
                }
        
                .heading-section .subheading {
                    margin-bottom: 20px !important;
                    display: inline-block;
                    font-size: 13px;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    color: rgba(0, 0, 0, .4);
                    position: relative;
                }
        
                .heading-section .subheading::after {
                    position: absolute;
                    left: 0;
                    right: 0;
                    bottom: -10px;
                    width: 100%;
                    height: 2px;
                    background: #30e3ca;
                    margin: 0 auto;
                }
        
                .heading-section-white {
                    color: rgba(255, 255, 255, .8);
                }
        
                .heading-section-white h2 {
                    /* font-family; */
                    line-height:1;
                    padding-bottom: 0;
                }
        
                .heading-section-white h2 {
                    color: #ffffff;
                }
        
                .heading-section-white .subheading {
                    margin-bottom: 0;
                    display: inline-block;
                    font-size: 13px;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    color: rgba(255, 255, 255, .4);
                }
        
        
                ul.social {
                    padding: 0;
                }
        
                ul.social li {
                    display: inline-block;
                    margin-right: 10px;
                }
        
                /*FOOTER*/
        
                .footer {
                    border-top: 1px solid rgba(0, 0, 0, .05);
                    color: rgba(0, 0, 0, .5);
                }
        
                .footer .heading {
                    color: #000;
                    font-size: 20px;
                }
        
                .footer ul {
                    margin: 0;
                    padding: 0;
                }
        
                .footer ul li {
                    list-style: none;
                    margin-bottom: 10px;
                }
        
                .footer ul li a {
                    color: rgba(0, 0, 0, 1);
                }
        
                .message{
                    text-align: justify;
                }
        
                .subject{
                    text-align: justify;
                }
        
        
                @media screen and (max-width: 500px) {}
            </style>
        </head>
        
        <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
            <center style="width: 100%; background-color: #f1f1f1;">
                <div
                    style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
                    &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
                </div>
                <div style="max-width: 600px; margin: 0 auto;" class="email-container">
                    <!-- BEGIN BODY -->
                    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                        style="margin: auto;">
                        <tr>
                            <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td class="logo" style="text-align: center;">
                                            <h2><a href="#">Verify Email Address</a></h2>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr><!-- end tr -->
                        <tr>
                            <!-- <td valign="middle" class="hero bg_white" style="padding: 2em 0 2em 0;">
                                <img src="images/email.png" alt=""
                                    style="width: 300px; max-width: 600px; height: auto; margin: auto; display: block;">
                            </td> -->
                        </tr><!-- end tr -->
                        <tr>
                            <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
                                <table>
                                    <tr>
                                        <td>
                                            <div class="text" style="padding: 0 2.5em; text-align: center;">
                                                <h3 class="subject">'. $subject .'</h3>
                                                <p class="message" >'. $message .'.</p>
                                                <p><a href="#" class="btn btn-primary">verification</a></p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr><!-- end tr -->
                        <!-- 1 Column Text + Button : END -->
                    </table>
                </div>
            </center>
        </body>
        
        </html>
        ';

        return $template;
    }
    
}

