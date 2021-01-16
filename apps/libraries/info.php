<?php

use MiniMvc\Apps\Core\Bootstraping\Controller;

/**
 * Documentasi Code
 */

class Info extends Controller
{

  // function getinfo user akses
  public function getInfo()
  {
    // get url
    $url = $this->lib('Url')->getUrl();
    // covert arrat to string
    $getURI = implode(",", $url);

    // print_r($getURI);
    // die;
    // buat zona time indonesia
    date_default_timezone_set('Asia/Jakarta');

    $data = [
      'host' => $_SERVER['HTTP_HOST'],
      'server' => $_SERVER['SERVER_NAME'],
      'remote_adr' => $_SERVER['REMOTE_ADDR'],
      'server_adr' => $_SERVER['SERVER_ADDR'],
      'php_self' => $_SERVER['PHP_SELF'],
      'script_name' => $_SERVER['SCRIPT_NAME'],
      'file_name' => $getURI,
      'browser' => $this->getBrowser(),
      'platform' => $this->getOS(),
      'date' => date('Y-m-d H:i:s', time())
    ];

    //  $info =  $this->model('info_model')->getAllInfoUser();
    //   # code...
    //   var_dump($data);
    //   var_dump($info);
    //   $i = 0;
    //   if ( in_array($data['remote_adr'],$info[$i++])) {
    //     echo '<br>';
    //     echo $i++;
    //     echo '<br>';
    //     echo 'ipsama';
    //     // echo '<br>';
    //   }else {
    //     echo 'beda';
    //    // insert data ke dalam fungsi pada model Info
    //   // $this->model('Info_model')->createInfoData($data);
    //   }
    // die;
    // insert data ke dalam fungsi pada model Info
    // $this->model('Info_model')->createInfoData($data);
  }

  //get OS
  public function getOS()
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

  function getBrowser()
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
}