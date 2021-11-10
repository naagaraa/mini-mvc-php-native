<?php

namespace MiniMvc\Apps\Core\Bootstraping;

use MiniMvc\Apps\Core\Bootstraping\Error_Handling;

/**
 * ===============================================================================================
 * Documentasi Security
 * @author nagara 
 * ===============================================================================================
 * 
 * basic class for filter xss on the client
 */
class Security
{
    private static $str;

    /**
     * simple sanitize filter XSS 
     * @author nagara
     * @return string
     */
    public static function xss($string = null, $active = 1)
    {
        if ($active == 1) {
            self::$str = strip_tags(htmlspecialchars($string));
            return self::$str;
        } else {
            self::$str = $string;
            return self::$str;
        }
    }
}
