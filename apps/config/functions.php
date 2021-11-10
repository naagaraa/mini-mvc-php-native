<?php

use MiniMvc\Apps\Core\Bootstraping\Error_Handling;
use MiniMvc\Apps\Core\Bootstraping\Security;
use Michelf\MarkdownExtra;

/**
 * Documentasi functions file
 * @author nagara
 * 
 * oke function file adalah sekumpulan build in function yang saya buat untuk 
 * readable code sehingga tidak berulang kali membuat function yang sama 
 * dalam keperluan yang sama juga.
 * 
 * beberpa function yang dibuat antara lain sebagai berikut
 * ----------------------------------------------------------------------------------------
 * @return fucntion
 * UNTUK URL 
 * ----------------------------------------------------------------------------------------
 * url()
 * asset()
 * upload_dir()
 * ----------------------------------------------------------------------------------------
 * @return fucntion
 * UNTUK REDIRECT URL
 * ----------------------------------------------------------------------------------------
 * redirect()
 * redirect_404()
 * redirect_403()
 * redirect_301()
 * ----------------------------------------------------------------------------------------
 * @return fucntion
 * UNTUK GET URL
 * ----------------------------------------------------------------------------------------
 * get_url()
 * current_url()
 * ----------------------------------------------------------------------------------------
 * @return fucntion
 * UNTUK FILE
 * ----------------------------------------------------------------------------------------
 * random_file_name()
 * ----------------------------------------------------------------------------------------
 * @return fucntion
 * UNTUK VIEW ONLY
 * ----------------------------------------------------------------------------------------
 * view()
 * @return fucntion
 * UNTUK Model ONLY
 * ----------------------------------------------------------------------------------------
 * model()
 * @return fucntion
 * UNTUK get rest api json - php curl ONLY
 * ----------------------------------------------------------------------------------------
 * get_rest_api()
 */

/**
 * Membuat function untuk show url root, base url root => '/'
 * @author nagara 
 * @return string
 */
function url($url = '')
{
    return URL . $url;
}

/**
 * Membuat function untuk show url asset base /public/
 * @author nagara 
 * @return string
 */
function asset($url = '')
{
    return ASSET . $url;
}

/**
 * Membuat function untuk directory upload base path /upload/
 * @author nagara 
 * @return string
 */
function upload_dir($url = '')
{
    return UPLOAD_F . $url;
}


/**
 * Membuat function untuk directory storage base path /storage/
 * @author nagara 
 * @return string
 */
function storage($url = '')
{
    return UPLOAD_F . $url;
}

/**
 * Membuat function untuk directory temporar base path /temporar/
 * @author nagara 
 * @return string
 */
function temp_dir($url = '')
{
    return TEMP_F . $url;
}


/**
 * Membuat function redirect url
 * @author nagara 
 * @return redirect
 */
function redirect($url = '', $permanent = false)
{
    if ($url != '') {
        ob_clean();
        header('Location: ' . URL . $url, true, $permanent ? 301 : 302);
    } else {
        ob_clean();
        header('Location: ' . URL, true, $permanent ? 301 : 302);
    }
}

/**
 * Membuat function redirect_404 Not Found
 * @author nagara 
 * @return redirect
 */
function redirect_404()
{
    // prevent Browser cache for php site
    ob_clean();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('HTTP/1.1 404 Not Found');
    Error_Handling::showerror_404();
}


/**
 * Membuat function redirect_403 Forbidden
 * @author nagara 
 * @return redirect
 */
function redirect_403()
{
    // prevent Browser cache for php site
    ob_clean();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('HTTP/1.1 403 Forrbidden');
    exit;
}

/**
 * Membuat function redirect_301 Moved permanent
 * @author nagara 
 * @return redirect
 */
function redirect_301($url = '', $permanent = false)
{
    // prevent Browser cache for php site
    ob_clean();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('HTTP/1.1 301 Moved Permanetly');
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit;
}


/**
 * membuat function URL saat ini
 * @author nagara 
 * @return string
 */
function current_url()
{
    $now_url = '';
    $url = get_url();
    if (!empty($url)) {
        foreach ($url as $route) {
            $now_url .= $route . '/';
        }
        return URL . $now_url;
    } else {
        return URL . $now_url;
    }
}


/**
 * membuat function get url berdasarkan index  atau routing
 * @author nagara
 * @return array
 */
function get_url($index = '')
{
    /**
     * $_GET['url'] merupakan URL atau pretty url yang di set
     * atau dirapikan pada file .htaccess, jadi penulisannya yang di set
     * menggunakan htaccess adalah index.php?url=xyz sebagai default
     * maka dari itu bisa memanggil $_get['url']
     */
    if (isset($_GET['url'])) {
        /**
         *  Merapikan url menggukan method rtrim untuk menhapus / dibagian akhir url
         * 	mengamankan url dari variabel aneh dengan method Filter_var 
         *  memecar URL menjadi array dengan method explode setiap bertemu string atau karakter /
         */
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);

        if ($index !== '') {
            return $url[$index];
        } else {
            return $url;
        }
    } else {

        $url = trim($_SERVER["REQUEST_URI"], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);

        if ($index !== '') {
            return $url[$index];
            unset($url[0]);
        } else {
            return $url;
        }
    }
}

/**
 * membuat function get random filename 
 * @author nagara
 * @return string
 */
function random_file_name($keyname = '')
{
    // config generate auto uniq
    /* A uniqid, like: 4b3403665fea6 */

    // nama file
    $getNama = $keyname;

    // delete space
    $removeSpace = preg_replace('/\s+/', '', $getNama);

    // pisahkan dgn extentionnya
    $explodeFile = explode('.', $removeSpace);

    $namaFiles = $explodeFile[0];
    $extFiles = end($explodeFile);

    // buat nama baru  
    $file = md5(uniqid($namaFiles));

    // gabung kembali menjadi file baru
    $new_file = $file . '.' . $extFiles;
    return $new_file;
}

/**
 * membuat function panggil view
 * @author nagara
 */


function view($views = '', $var = null)
{
    // mengarah pada folder apps/views/ namaviews.php
    $view = str_replace(".", "/", $views);
    try {
        if (!file_exists(_ROOT_VIEW . $view . '.php')) {
            throw new Exception("View " . $view . " Not Found. Check Controllernya Bro");
        } else {
            # comment this jika tidak ingin menggunakan twig engine
            // $loader = new \Twig\Loader\FilesystemLoader(_ROOT_VIEW);
            // $twig = new \Twig\Environment($loader, ['debug' => true]);

            // echo $twig->render($view . '.php' , $data);

            // check type data yang dikirim
            if (is_array($var)) {
                # convert array assoc to object
                $object = json_decode(json_encode($var));

                #extract key object to variabel
                extract((array) $object);
            } elseif (is_object($var)) {
                # convert array assoc to object
                $object = json_decode(json_encode($var));
                #extract key object to variabel
                extract((object) $object);
            } else {
                # convert array assoc to object
                $object = json_decode(json_encode($var));
            }

            # uncomment this jika tidak ingin menggunakan twig engine
            require_once _ROOT_VIEW . $view . '.php';  //update template engine menggunakan twig
        }
        return false;
    } catch (Exception $exception) {
        $my_error = new Error_Handling;
        $my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
        exit;
    }
}

function read_view($views = '', array $var = null)
{
    // mengarah pada folder apps/views/ namaviews.php
    $view = str_replace(".", "/", $views);
    try {
        if (!file_exists(_ROOT_VIEW . $view . '.php')) {
            throw new Exception("View " . $view . " Not Found. Check Controllernya Bro");
        } else {
            # comment this jika tidak ingin menggunakan twig engine
            // $loader = new \Twig\Loader\FilesystemLoader(_ROOT_VIEW);
            // $twig = new \Twig\Environment($loader, ['debug' => true]);

            // echo $twig->render($view . '.php' , $data);

            # start buffer untuk get source code to string tampa execute code
            ob_start();
            # convert array assoc to object
            $object = json_decode(json_encode($var));

            #extract key object to variabel
            extract((array) $object);

            # uncomment this jika tidak ingin menggunakan twig engine
            require_once _ROOT_VIEW . $view . '.php';  //update template engine menggunakan twig

            $output_string = ob_get_contents();

            ob_end_clean();

            return $output_string;
        }
        return false;
    } catch (Exception $exception) {
        $my_error = new Error_Handling;
        $my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
        exit;
    }
}

/**
 * membuat function membaca file markdown
 * @author nagara
 * @return string
 */
function read_markdown($markdown = '')
{
    // mengarah pada folder apps/views/ namaviews.php
    $file = str_replace(".", "/", $markdown);
    // dd(_ROOT_MARKDOWN . $file . '.md');
    try {
        if (!file_exists(_ROOT_MARKDOWN . $file . '.md')) {
            throw new Exception("Markdown name " . $file . " Not Found. Check Controllernya Bro");
        } else {
            // call markdown file
            $file_mark_down = file_get_contents(_ROOT_MARKDOWN . $file . '.md');

            $my_html = MarkdownExtra::defaultTransform($file_mark_down);
            return $my_html;  //return file markdown
        }
        return false;
    } catch (Exception $exception) {
        $my_error = new Error_Handling;
        $my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
        exit;
    }
}


/**
 * membuat function panggil model
 * @author nagara
 */
function model($model = '')
{
    // mengarah pada folder apps/models/ namamodels.php
    try {
        if (!file_exists(_ROOT_MODEL . $model . '.php')) {
            throw new Exception("Models " . $model . " Not Found. Check Controllernya Bro di bagian load modelnya ");
        }

        require_once _ROOT_MODEL . $model . '.php';
        return new $model;
    } catch (Exception $exception) {
        $my_error = new Error_Handling;
        $my_error->showerror_message($exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
        exit;
    }
}


/**
 * untuk membuat slug
 * string to slug
 * example : judul satu dua menjadi judul-satu-dua
 * @author nagara
 * @return string
 */

function slug($str = '', $slug = '-')
{
    return str_replace(" ", $slug, trim($str));
}

/**
 * untuk menapatkan data bentu json atau rest
 * @author nagara
 * @return string / JSON
 */

function get_rest_api($api_url = '')
{
    try {
        // url
        $url = $api_url;

        // init
        $curl = curl_init();
        // execute rest
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // save data 
        $response = curl_exec($curl);

        // close connection
        curl_close($curl);

        return $response;
    } catch (\Throwable $th) {
        //throw $th;
    }
}
