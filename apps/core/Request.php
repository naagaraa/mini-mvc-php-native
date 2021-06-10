<?php
namespace MiniMvc\Apps\Core\Bootstraping;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;

class Request 
{
    private static $str;

    public function get($data = null)
    {
        self::$str = strip_tags((htmlspecialchars($_GET[$data])));
        return self::$str;
    }

    public function post($data = null)
    {
        self::$str = strip_tags((htmlspecialchars($_POST[$data])));
        return self::$str;
    }
}