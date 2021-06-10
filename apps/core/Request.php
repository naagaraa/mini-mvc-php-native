<?php
namespace MiniMvc\Apps\Core\Bootstraping;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;

class Request 
{
    private static $str;

     /**
     * get request | sanitize filter XSS 
     * @author nagara
     * @return string
     */
    public function get($data = null)
    {
        self::$str = strip_tags((htmlspecialchars($_GET[$data])));
        return self::$str;
    }

    /**
     * post request | sanitize filter XSS 
     * @author nagara
     * @return string
     */
    public function post($data = null)
    {
        self::$str = strip_tags((htmlspecialchars($_POST[$data])));
        return self::$str;
    }
    
    /**
     * html request | no sanitize untuk content html dari wysg
     * @author nagara
     * @return string
     */
    public function html($data = null)
    {
        self::$str = $_POST[$data];
        return self::$str;
    }
    
}