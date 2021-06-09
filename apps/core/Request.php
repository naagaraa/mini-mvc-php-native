<?php
namespace MiniMvc\Apps\Core\Bootstraping;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;

class Request 
{
    private static $str;

    public function get($data = null)
    {
        self::$str = strip_tags(mysqli_real_escape_string((htmlspecialchars($_GET[$data]))));
        return self::$str;
    }

    public function post($data = null)
    {
        self::$str = strip_tags(mysqli_real_escape_string((htmlspecialchars($_POST[$data]))));
        return self::$str;
    }
}