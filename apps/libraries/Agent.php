<?php

Namespace MiniMvc\Apps\Libraries;

/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * untuk menggunakan info_agent yang ada disini silahkan panggil mengunakan nama namespacenya
 * lalu deklarasi sebuah object baru.
 * 
 * contoh :
 * use MiniMvc\Apps\Libraries\Info_Agent;
 * 
 * $agent = new Agent;
 * 
 * $agent->get_os();
 * $agent->get_browser();
 * $agent->get_ip_client();
 * $agent->get_ip_server();
 * 
 * atau 
 * 
 * Agent::get_os()
 * Agent::get_browser()
 * Agent::get_ip_client()
 * Agent::get_ip_server()
 * 
 */

class Agent 
{

  /**
	 * method for get operationg system
	 * @author nagara and internet
   * @return string
	 */
  public static function get_os()
  {

    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform  = "Unknown OS Platform";
    $os_array     = array(
      '/windows nt 10/i'      =>  'Windows 10',
      '/windows nt 6.3/i'     =>  'Windows 8.1',
      '/windows nt 6.2/i'     =>  'Windows 8',
      '/windows nt 6.1/i'     =>  'Windows 7',
      '/windows nt 6.0/i'     =>  'Windows Vista',
      '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
      '/windows nt 5.1/i'     =>  'Windows XP',
      '/windows xp/i'         =>  'Windows XP',
      '/windows nt 5.0/i'     =>  'Windows 2000',
      '/windows me/i'         =>  'Windows ME',
      '/win98/i'              =>  'Windows 98',
      '/win95/i'              =>  'Windows 95',
      '/win16/i'              =>  'Windows 3.11',
      '/macintosh|mac os x/i' =>  'Mac OS X',
      '/mac_powerpc/i'        =>  'Mac OS 9',
      '/linux/i'              =>  'Linux',
      '/ubuntu/i'             =>  'Ubuntu',
      '/iphone/i'             =>  'iPhone',
      '/ipod/i'               =>  'iPod',
      '/ipad/i'               =>  'iPad',
      '/android/i'            =>  'Android',
      '/blackberry/i'         =>  'BlackBerry',
      '/webos/i'              =>  'Mobile'
    );

    foreach ($os_array as $regex => $value)
      if (preg_match($regex, $user_agent))
        $os_platform = $value;

    return $os_platform;
  }

  /**
	 * method for get client browser
	 * @author nagara 
   * @return string
	 */
  public static function get_browser()
  {

    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
      '/msie/i'       =>  'Internet Explorer',
      '/firefox/i'    =>  'Firefox',
      '/safari/i'     =>  'Safari',
      '/chrome/i'     =>  'Chrome',
      '/opera/i'      =>  'Opera',
      '/netscape/i'   =>  'Netscape',
      '/maxthon/i'    =>  'Maxthon',
      '/konqueror/i'  =>  'Konqueror',
      '/mobile/i'     =>  'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value) {
      if (preg_match($regex, $user_agent)) {
        $browser    =   $value;
      }
    }
    return $browser;
  }

  /**
	 * method for get ip client
	 * @author nagara 
   * @return string
	 */
  public static function get_ip_client()
  {
    return $_SERVER['REMOTE_ADDR'];
  }

  /**
	 * method for get ip server
	 * @author nagara 
   * @return string
	 */
  public static function get_ip_server()
  {
    return $_SERVER['SERVER_ADDR'];
  }

  /**
	 * method for get ip host
	 * @author nagara 
   * @return string
	 */
  public static function get_host()
  {
    return $_SERVER['HTTP_HOST'];
  }
}