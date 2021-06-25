<?php
/**
 * ----------------------------------------------------------------------------------------
 * Documentation
 * ----------------------------------------------------------------------------------------
 * untuk membuat auto require file pada folder config dengan memanfaatkan build in 
 * function pada php yaitu scandir dna is_dir , is_file dan dilakukan loop sebanyak
 * jumlah array atau file pada dir tersebut
 * 
 * @author nagara
 * @return function
 */


/**
 * function for read root directory
 * @param directory
 */
function directory_system($dir){
    directory_system_children($dir);
}

/**
 * function for read child directory
 * @param directory
 */
function directory_system_children($dir){
    $dirPath = realpath($dir) . DIRECTORY_SEPARATOR;
    $scanDir =  scandir($dirPath); // read directory bro

    foreach( $scanDir as $file){

        // skip file if found
        if ($file == "." || $file == ".." || $file == "autoload.php" || $file == "config.php" || $file == "constant.php") {
            continue;
        }
        $filepath = $dirPath . $file;
        
        // check jika file adalah directory dan bisa di akses atau R (readable)
        if (is_dir($dirPath . $file) && (is_readable($dirPath . $file))) {
            directory_system_children($dirPath . $file);
        }

        // send paramter
        load_dir_system_config($filepath);

    }

}

/**
 * function for load files
 * @param files
 */
function load_dir_system_config($files)
{
    // load jika itu file
    if (is_file($files)) {
        require_once $files;
    }
}

// call function karena prosedural, jika oop maka menggunakan object dan contructor
directory_system(__DIR__);


