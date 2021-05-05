<?php
namespace MiniMVC\System\Mail;
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer {

    // server settings
    private $host = "smtp.example.com";
    private $username = "user@example.com";
    private $password = "secret";
    private $port = 587;


    // recepients setting
    private $mail_from = "";
    private $add_address = "";

    //params
    private $param ;

    public function __construct($host = "", $username = "" , $password = "", $port = "", $mail_from="", $add_address = "") {
        # contructor fucntion
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;

        $this->mail_from = $mail_from;
        $this->add_address = $add_address;
    }


    public function connection_mail()
    {
        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        echo "mailer";
        die;
    
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'user@example.com';                     //SMTP username
            $mail->Password   = 'secret';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
    
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    
}

