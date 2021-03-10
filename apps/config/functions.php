<?php
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;
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
 * UNTUK DEGUB ONLY
 * ----------------------------------------------------------------------------------------
 * testme()
 */

/**
 * Membuat function untuk show url root, base url root => '/'
 * @author nagara 
 * @return string
 */
function url($url = '' )
{
   return URL . $url ; 
}

/**
 * Membuat function untuk show url asset base /public/
 * @author nagara 
 * @return string
 */
function asset($url = '' )
{
   return ASSET . $url ; 
}

/**
 * Membuat function untuk directory upload base path /upload/
 * @author nagara 
 * @return string
 */
function upload_dir($url = '' )
{
   return UPLOAD_F . $url ; 
}


/**
 * Membuat function redirect url
 * @author nagara 
 * @return redirect
 */
function redirect($url = '' , $permanent = false)
{
    if ($url != '') {
        header('Location: ' . URL . $url, true, $permanent ? 301 : 302);
    }else{
        header('Location: ' . URL , true, $permanent ? 301 : 302);
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
function redirect_301($url = '' , $permanent = false)
{
    // prevent Browser cache for php site
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
        foreach ($url as $route ) {
            $now_url .= $route . '/';
        }
        return URL . $now_url;
    }else{
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
        }else{
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
function view($view = '', $data = [])
{
    // mengarah pada folder apps/views/ namaviews.php
    try {
        if (!file_exists('apps/views/' . $view . '.php')) {
            throw new Exception("View ". $view ." Not Found. Check Controllernya Bro");
        }

        require_once 'apps/views/' . $view . '.php';
        exit;
    } catch (Exception $exception) {
        $my_error = new Error_Handling;
        $my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
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
			if (!file_exists('apps/models/' . $model . '.php')) {
				throw new Exception("Models ". $model ." Not Found. Check Controllernya Bro di bagian load modelnya ");
			}

			require_once 'apps/models/' . $model . '.php';
			return new $model;
		} catch (Exception $exception) {
			$my_error = new Error_Handling;
			$my_error->showerror_message($exception->getMessage() , $exception->getFile() , $exception->getLine() , $exception->getTraceAsString());
			exit;
		}
	}

/**
 * membuat function testing atau debug variabel
 * @author nagara
 */
function testme($val = '')
{
    var_dump($val);
    die;
}