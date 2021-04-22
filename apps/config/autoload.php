<?php
/**
 * ----------------------------------------------------------------------------------------
 * Documentation
 * ----------------------------------------------------------------------------------------
 * untuk membuat auto require file pada folder config dengan memanfaatkan build in 
 * function pada php yaitu scandir dna is_dir dan dilakuikan loop sebanyak
 * jumlah array atau file pada dir tersebut
 * 
 * @author nagara
 * @return function
 */
function load_dir_config()
{
    $config_directory = __DIR__ ;
    $file_config = [];
    $scan = scandir( $config_directory );
    $index = 0;
    foreach($scan as $file) {
        if (!is_dir($file)) {
            $file_config[$index++] = $file;  
        }
    }

    // hapus index 0 dan 1
    unset($file_config[0]);         //autoload.php
    unset($file_config[1]);         //conifg.php

    // negatif looping
    for ($i=count($file_config) + 1 ; $i >= 2 ; $i--) { 
        require  $file_config[$i];
    }
}

/* call the function name */
load_dir_config();


