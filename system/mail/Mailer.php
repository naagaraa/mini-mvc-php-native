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
            $mail->Body    = $this->template_email($email["template"]);
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
    public function template_email($string = null)
    {
        return $string;
    }
}

