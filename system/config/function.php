<?php

use MiniMvc\Apps\Core\Bootstraping\Error_Handling;

function template($views = '', Array $var = null)
{
    // mengarah pada folder apps/views/ namaviews.php
    $view = str_replace(".","/", $views);
    try {
        if (!file_exists(_ROOT_VIEW . "email/" . $view . '.php')) {
            throw new Exception("View " . $view . " Not Found. Check Controllernya Bro");
        } else {

            # start buffer untuk get source code to string tampa execute code
            ob_start();

            # convert array assoc to object
            $object = json_decode(json_encode($var));
            extract((array) $object);

            require _ROOT_VIEW . "email/" . $view . '.php';  

            $output_string = ob_get_contents();
            
            ob_end_clean();
            # end buffer untuk get source code to string tampa execute code
            
            return $output_string;
        }
        return false;
    } catch (Exception $exception) {
        $my_error = new Error_Handling;
        $my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
        exit;
    }
}