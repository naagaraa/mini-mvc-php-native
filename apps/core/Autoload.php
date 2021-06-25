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
    /**
     * method for read root directory
     * @param directory
     */
    public static function directorys($dir){
        self::directory_childrens($dir);
    }

    /**
     * method for read file at children directory
     * @param directory
     */
    public static  function directory_childrens($dir){
        $dirPath = realpath($dir) . DIRECTORY_SEPARATOR;
        $scanDir =  scandir($dirPath); // read directory bro

        foreach( $scanDir as $file){

            // skip file if found . or ..
            if ($file == "." || $file == ".." ) {
                continue;
            }
            $filepath = $dirPath . $file;
            
            // check jika file adalah directory dan bisa di akses atau R (readable)
            if (is_dir($dirPath . $file) && (is_readable($dirPath . $file))) {
                self::directory_childrens($dirPath . $file);
            }

            // check jika path adalah file
            if (is_file($filepath)) {
                self::load_dir_configs($filepath);
                
            }
        }

    }

    /**
     * method for load files
     * @param files
     */
    public static function load_dir_configs($files)
    {
        require_once $files;
    }

}
