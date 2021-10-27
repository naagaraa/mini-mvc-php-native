<?php

namespace MiniMVC\System\Console;


/**
 * ===============================================================================================
 * FILE SYSTEM
 * @author nagara 
 * ===============================================================================================
 *  
 * File system adalah handling native build untuk CR (created, read) file system
 */


class FileSystem
{
    /**
     * method for create env
     * @author nagara
     * @return file
     */
    public static function create_env()
    {
        /**
         * Handle untuk create automation file .env
         * untuk create env project sesuai folder project
         */
        $path = dirname(__FILE__, 3);

        $newpt = str_replace("\\", "/", $path);

        $dir = explode('/', $newpt);
        $new_project = end($dir);

        if (file_exists($newpt . '//.env')) {
            $FileEnvirotmentVariabel = fopen($newpt . '//.env', "w") or die("Unable to open file!");
            $txt = "# config file .env untuk configurasi pada file\n# apps/config/database.php\n# apps/config/constant.php\n\nAPP_DEBUG=true\nAPP_ENV=local\nAPP_MAINTENANCE=off\n\n# configurasi Path here\nAPP_NAME=" . $new_project . "\nAPP_HOST=http://localhost/\n\n# configurasi Database here\nDB_TYPE=mysql\nDB_HOST=localhost\nDB_PORT=3306\nDB_NAME=" . $new_project . "\nDB_USERNAME=root\nDB_PASSWORD=\n\n# configurasi mailer (on development)\nMAIL_DEBUG=true\nMAIL_MAILER=smtp\nMAIL_HOST=mailhog\nMAIL_PORT=1025\nMAIL_USERNAME=null\nMAIL_PASSWORD=null\nMAIL_ENCRYPTION=null\nMAIL_FROM_ADDRESS=null\nMAIL_FROM_NAME='$" . "{" . "APP_NAME" . "}'";

            fwrite($FileEnvirotmentVariabel, $txt);
            fclose($FileEnvirotmentVariabel);
        } else {
            $FileEnvirotmentVariabel = fopen($newpt . '//.env', "w") or die("Unable to open file!");
            $txt = "# config file .env untuk configurasi pada file\n# apps/config/database.php\n# apps/config/constant.php\n\nAPP_DEBUG=true\nAPP_ENV=local\nAPP_MAINTENANCE=off\n\n# configurasi Path here\nAPP_NAME=" . $new_project . "\nAPP_HOST=http://localhost/\n\n# configurasi Database here\nDB_TYPE=mysql\nDB_HOST=localhost\nDB_PORT=3306\nDB_NAME=" . $new_project . "\nDB_USERNAME=root\nDB_PASSWORD=\n\n# configurasi mailer (on development)\nMAIL_DEBUG=true\nMAIL_MAILER=smtp\nMAIL_HOST=mailhog\nMAIL_PORT=1025\nMAIL_USERNAME=null\nMAIL_PASSWORD=null\nMAIL_ENCRYPTION=null\nMAIL_FROM_ADDRESS=null\nMAIL_FROM_NAME='$" . "{" . "APP_NAME" . "}'";

            fwrite($FileEnvirotmentVariabel, $txt);
            fclose($FileEnvirotmentVariabel);
        }
    }

    /**
     * method for copy env
     * @author nagara
     * @return file
     */
    public static function copy_exampe_env()
    {
        copy(".env.example", ".env");
    }

    /**
     * method for create controller
     * @author nagara
     * @return file
     * @param string
     */
    public static function create_controller($name = '')
    {
        // config structure directory nested
        $structure = explode("/", $name);
        $get_namespace = array_slice($structure, 0, -1); # config generate namespace
        $file = end($structure);
        $nama_file = $file; # nama file

        // join array into string and check directory < 0 for create new atau generate namescpase
        $namespace =  implode("\\", $get_namespace);
        if (count($get_namespace) > 0) {
            $namespace = "\\" . $namespace;
        } else {
            $namespace = "";
        }

        // remove last index of array dari structure
        if (count($structure) >= 1) {
            array_pop($structure);
        }

        $new_filename = $file . ".php";

        // get new structur
        $new_structur = implode("/", $structure);

        $path_core = dirname(__DIR__, 2)  . "/apps/controllers/";
        $path_default_file = dirname(__DIR__, 1) . "/defaults/controller/BasicController.stubs";
        $path_new_file = dirname(__DIR__, 2)  . "/apps/controllers/" . $new_structur . DIRECTORY_SEPARATOR . str_replace('controller', 'Controller', ucwords(strtolower($new_filename))); # convert first character to uppercase and replace character controller to uppercase

        if (file_exists($path_default_file)) {
            if (file_exists($path_new_file)) {
                return "file " . $path_new_file . " controller sudah ada";
            } else {

                // check jika path folder dan file tidak ada;
                while (!file_exists($path_core . $new_structur)) {
                    mkdir($path_core . $new_structur, 777, true);
                    break;
                }

                // check buat nested directory jika tidak ada
                if (file_exists($path_core . $new_structur)) {
                    $default_name = "BasicController";
                    $default_namespace = "\basicnamespace";

                    $file = file_get_contents($path_default_file);          # read file

                    /**
                     * basic algorithm replace name
                     * 1. replace namespace default name
                     * 2. replace default name controller
                     */
                    $file = str_replace($default_namespace, str_replace('controller', 'Controller', ucwords(strtolower($namespace))), $file); # generate namespace
                    $file = str_replace($default_name, str_replace('controller', 'Controller', ucwords(strtolower($nama_file))), $file);      # replace string and # convert first character to uppercase and replace character controller to uppercase

                    file_put_contents($path_new_file, $file);              # create file

                    return "buat file " . $path_new_file . " controller  berhasil";
                }
            }
        }
    }

    /**
     * method for create libraries
     * @author nagara
     * @return file
     * @param string
     */
    public static function create_libraries($name = '')
    {
        // config structure directory nested
        $structure = explode("/", $name);
        $get_namespace = array_slice($structure, 0, -1); # config generate namespace
        $file = end($structure);
        $nama_file = $file; # nama file

        // join array into string and check directory < 0 for create new atau generate namescpase
        $namespace =  implode("\\", $get_namespace);
        if (count($get_namespace) > 0) {
            $namespace = "\\" . $namespace;
        } else {
            $namespace = "";
        }

        // remove last index of array
        if (count($structure) >= 1) {
            array_pop($structure);
        }
        $new_filename = $file . ".php";

        // get new structur
        $new_structur = implode("/", $structure);

        $path_core = dirname(__DIR__, 2)  . "/apps/libraries/";
        $path_default_file = dirname(__DIR__, 1) . "/defaults/libraries/BasicLibraries.stubs";
        $path_new_file = dirname(__DIR__, 2)  . "/apps/libraries/" . $new_structur . DIRECTORY_SEPARATOR . ucwords(strtolower($new_filename));

        if (file_exists($path_default_file)) {
            if (file_exists($path_new_file)) {
                return "file " . $path_new_file . " libraries sudah ada";
            } else {
                // check jika path folder dan file tidak ada;
                while (!file_exists($path_core . $new_structur)) {
                    mkdir($path_core . $new_structur, 777, true);
                    break;
                }

                // check buat nested directory jika tidak ada
                if (file_exists($path_core . $new_structur)) {
                    $default_name = "BasicLibraries";
                    $default_namespace = "\basicnamespace";

                    $file = file_get_contents($path_default_file);              # read file

                    /**
                     * basic algorithm replace name
                     * 1. replace namespace default name
                     * 2. replace default name controller
                     */
                    $file = str_replace($default_namespace, ucwords(strtolower($namespace)), $file); # generate namespace
                    $file = str_replace($default_name, ucwords(strtolower($nama_file)), $file);     # replace string

                    file_put_contents($path_new_file, $file);                  # create file
                    return "buat file " . $path_new_file . " libraries  berhasil dibuat";
                }
            }
        }
    }

    /**
     * method for create models
     * @author nagara
     * @return file
     * @param string
     */
    public static function create_models($name = '')
    {
        // khusus models tidak bisa nested
        $new_filename = $name . ".php";

        $path_default_file = dirname(__DIR__, 1) . "/defaults/models/BasicModels.stubs";
        $path_new_file = dirname(__DIR__, 2)  . "/apps/models/" . ucwords(strtolower($new_filename));

        if (file_exists($path_default_file)) {
            if (file_exists($path_new_file)) {
                return "file " . $path_new_file . " models sudah ada";
            } else {
                $default_name = "MainModel";

                $file = file_get_contents($path_default_file);          # read file
                $file = str_replace($default_name, ucwords(strtolower($name)), $file);      # replace string

                file_put_contents($path_new_file, $file);              # create file
                return "buat file " . $path_new_file . " models berhasil";
            }
        }
    }


    /**
     * method for create migration
     * @author nagara
     * @return file
     * @param string
     */
    public static function create_migration($name = '')
    {
        // problem belum bisa buat nested directory
        $time = str_replace(":", "", date('H:i:s'));
        $date = str_replace("-", "", date("Y-m-d"));
        $new_filename = $date . $time . "_" . $name . ".php";

        $path_default_file = dirname(__DIR__, 1) . "/defaults/database/BasicDatabase.stubs";
        $path_new_file = dirname(__DIR__, 2)  . "/database/migrations/" . $new_filename;

        if (file_exists($path_default_file)) {
            if (file_exists($path_new_file)) {
                return "file " . $path_new_file . " migration sudah ada";
            } else {
                $default_name = "Template";

                $file = file_get_contents($path_default_file);          # read file
                $file = str_replace($default_name, $name, $file);      # replace string

                file_put_contents($path_new_file, $file);              # create file
                return "buat file " . $path_new_file . " migration berhasil";
            }
        }
    }

    /**
     * method for create view
     * @author nagara
     * @return file
     * @param string
     */
    public static function create_view($name = '')
    {
        // config structure directory nested
        $structure = explode("/", $name);
        $file = end($structure);
        $nama_file = $file; # nama file

        // remove last index of array
        if (count($structure) >= 1) {
            array_pop($structure);
        }
        $new_filename = $file . ".php";

        // get new structur
        $new_structur = implode("/", $structure);

        $path_core = dirname(__DIR__, 2)  . "/apps/views/";
        $path_default_file = dirname(__DIR__, 1) . "/defaults/views/BasicView.stubs";
        $path_new_file = dirname(__DIR__, 2)  . "/apps/views/" . $new_structur . DIRECTORY_SEPARATOR . $new_filename;

        if (file_exists($path_default_file)) {
            if (file_exists($path_new_file)) {
                return "file " . $path_new_file . " view sudah ada";
            } else {
                // check jika path folder dan file tidak ada;
                while (!file_exists($path_core . $new_structur)) {
                    mkdir($path_core . $new_structur, 777, true);
                    break;
                }

                // check buat nested directory jika tidak ada
                if (file_exists($path_core . $new_structur)) {
                    $default_name = "Basic View";

                    $file = file_get_contents($path_default_file);              # read file
                    $file = str_replace($default_name, $nama_file, $file);     # replace string

                    file_put_contents($path_new_file, $file);                  # create file
                    return "buat file " . $path_new_file . " views berhasil";
                }
            }
        }
    }


    public static function create_dir($dirname = '')
    {
        $path_new_dir = dirname(__DIR__, 2)  . "/apps/controllers/";
        mkdir($path_new_dir . $dirname);
    }
}
