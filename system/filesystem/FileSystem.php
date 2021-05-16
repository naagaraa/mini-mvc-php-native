<?php

namespace MiniMVC\System\Console;


/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 *  
 *  File system handling
 */


class FileSystem
{

    public function create_env()
    {
        /**
         * Handle untuk create automation file .env
         * untuk create env project sesuai folder project
         */
        $path = dirname(__FILE__, 3);

        $newpt = str_replace("\\","/", $path);
        
        $dir = explode('/', $newpt);
        $new_project = end($dir);

        if (file_exists($newpt . '//.env')) {
            $FileEnvirotmentVariabel = fopen($newpt . '//.env', "w") or die("Unable to open file!");
            $txt = "# config file .env untuk configurasi pada file\n\n# apps/config/database.php\n# apps/config/constant.php\n\nAPP_DEBUG=true\nAPP_ENV=localAPP_MAINTENANCE=off\n\n# configurasi Path here\nAPP_NAME=" . $new_project . "\nAPP_HOST=http://localhost/\n\n# configurasi Database here\n\nDB_HOST=localhost\nDB_PORT=3306\nDB_NAME=\nDB_USERNAME=root\nDB_PASSWORD=\n\n# configurasi mailer (on development)\nMAIL_DEBUG=true\nMAIL_MAILER=smtp\nMAIL_HOST=mailhog\nMAIL_PORT=1025\nMAIL_USERNAME=null\nMAIL_PASSWORD=null\nMAIL_ENCRYPTION=null\nMAIL_FROM_ADDRESS=null\nMAIL_FROM_NAME=null";

            fwrite($FileEnvirotmentVariabel, $txt);
            fclose($FileEnvirotmentVariabel);
        } else {
            $FileEnvirotmentVariabel = fopen($newpt . '//.env', "w") or die("Unable to open file!");
            $txt = "# config file .env untuk configurasi pada file\n# apps/config/database.php\n# apps/config/constant.php\n\nAPP_DEBUG=true\nAPP_ENV=local\nAPP_MAINTENANCE=off\n\n# configurasi Path here\nAPP_NAME=" . $new_project . "\nAPP_HOST=http://localhost/\n\n# configurasi Database here\nDB_HOST=localhost\nDB_PORT=3306\nDB_NAME=\nDB_USERNAME=root\nDB_PASSWORD=\n\n# configurasi mailer (on development)\nMAIL_DEBUG=true\nMAIL_MAILER=smtp\nMAIL_HOST=mailhog\nMAIL_PORT=1025\nMAIL_USERNAME=null\nMAIL_PASSWORD=null\nMAIL_ENCRYPTION=null\nMAIL_FROM_ADDRESS=null\nMAIL_FROM_NAME=null";

            fwrite($FileEnvirotmentVariabel, $txt);
            fclose($FileEnvirotmentVariabel);
        }
    }

    public function copy_exampe_env()
    {
        copy(".env.example", ".env");
    }

    public function create_controller($name = '')
    {
        // problem belum bisa buat nested directory
        // belum bisa generate new class name
        $new_filename = $name.".php";

        $path_default_file = dirname(__DIR__, 1) . "/defaults/controller/BasicController.php";
        $path_new_file = dirname(__DIR__, 2)  . "/apps/controllers/".$new_filename;

        if (file_exists($path_default_file)) {
            if (file_exists($path_new_file)) {
                return "file " . $path_new_file ." controller sudah ada";
            }else{
                copy($path_default_file, $path_new_file);
                return "buat file " . $path_new_file . " controller  berhasil";
            }
        }
    }

    public function create_libraries($name = '')
    {
        // problem belum bisa buat nested directory
        // belum bisa generate new class name
        $new_filename = $name.".php";

        $path_default_file = dirname(__DIR__, 1) . "/defaults/libraries/BasicLibraries.php";
        $path_new_file = dirname(__DIR__, 2)  . "/apps/libraries/".$new_filename;

        if (file_exists($path_default_file)) {
            if (file_exists($path_new_file)) {
                return "file " . $path_new_file ." libraries sudah ada";
            }else{
                copy($path_default_file, $path_new_file);
                return "buat file " . $path_new_file . " libraries  berhasil dibuat";
            }
        }
    }

    public function create_models($name = '')
    {
        // problem belum bisa buat nested directory
        // belum bisa generate new class name
        $new_filename = $name.".php";

        $path_default_file = dirname(__DIR__, 1) . "/defaults/models/BasicModels.php";
        $path_new_file = dirname(__DIR__, 2)  . "/apps/models/".$new_filename;

        if (file_exists($path_default_file)) {
            if (file_exists($path_new_file)) {
                return "file " . $path_new_file ." models sudah ada";
            }else{
                copy($path_default_file, $path_new_file);
                return "buat file " .$path_new_file . " models berhasil";
            }
        }
    }

    public function create_view($name = '')
    {
        // problem belum bisa buat nested directory
        $new_filename = $name.".php";

        $path_default_file = dirname(__DIR__, 1) . "/defaults/views/BasicView.php";
        $path_new_file = dirname(__DIR__, 2)  . "/apps/views/".$new_filename;

        if (file_exists($path_default_file)) {
            if (file_exists($path_new_file)) {
                return "file " . $path_new_file ." view sudah ada";
            }else{
                copy($path_default_file, $path_new_file);
                return "buat file " . $path_new_file . " views berhasil";
            }
            
        }
    }

    public function create_dir($dirname = '')
    {
        $path_new_dir = dirname(__DIR__, 2)  . "/apps/controllers/";
        mkdir($path_new_dir . $dirname);
    }
}
