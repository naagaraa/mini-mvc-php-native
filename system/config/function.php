<?php

use MiniMvc\Apps\Core\Bootstraping\Error_Handling;

function MailTemplate($views = '', Array $var = null)
{
    $directory = dirname(__DIR__, 1) . "/" . "mail/html/";
    // mengarah pada folder apps/views/ namaviews.php
    $view = str_replace(".","/", $views);
    try {
        if (!file_exists($directory . $view . '.php')) {
            throw new Exception("View " . $view . " Not Found. Check Controllernya Bro");
        } else {
            # comment this jika tidak ingin menggunakan twig engine
            // $loader = new \Twig\Loader\FilesystemLoader($directory);
            // $twig = new \Twig\Environment($loader, ['debug' => true]);

            // echo $twig->render($view . '.php' , $data);

            # convert array assoc to object
            $object = json_decode(json_encode($var));

            #extract key object to variabel
            extract((array) $object);

            dump($object);

            # uncomment this jika tidak ingin menggunakan twig engine
            $template = file_get_contents($directory . $view . '.php');  //update template engine menggunakan twig
            dump($template);
            return $template;
        }
        return false;
    } catch (Exception $exception) {
        $my_error = new Error_Handling;
        $my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
        exit;
    }
}
