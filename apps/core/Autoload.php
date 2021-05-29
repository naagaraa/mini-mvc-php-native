<?php

namespace MiniMvc\Apps\Core\Bootstraping;
use Exception;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;
/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * update new class for nested autoload multi directory
 */
class Autoload  
{
    
    public function directorys($dir){
        Autoload::directory_childrens($dir);
    }

    public function directory_childrens($dir){
        $dirPath = realpath($dir) . DIRECTORY_SEPARATOR;
        $scanDir =  scandir($dirPath); // read directory bro

        foreach( $scanDir as $file){

            // skip file if found
            if ($file == "." || $file == ".." ) {
                continue;
            }
            $filepath = $dirPath . $file;
            
            // check jika file adalah directory dan bisa di akses atau R (readable)
            if (is_dir($dirPath . $file) && (is_readable($dirPath . $file))) {
                Autoload::directory_childrens($dirPath . $file);
            }

            // check jika path adalah file
            if (is_file($filepath)) {
                Autoload::load_dir_configs($filepath);
                
            }
        }

    }

    // load files
    public function load_dir_configs($files)
    {
        require_once $files;
    }

}
