<?php

Namespace MiniMvc\Apps\Libraries;
use MiniMvc\Apps\Core\Bootstraping\Error_Handling;
/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * untuk menggunakan Helper yang ada disini silahkan panggil mengunakan nama namespacenya
 * lalu deklarasi sebuah object baru.
 * 
 * contoh :
 * use MiniMvc\Apps\Libraries\Helper;
 * 
 * $helper = new Helper;
 * 
 * $helper->get_url();
 * $helper->current_url();
 * $helper->redirect();
 * $helper->redirect_404();
 * $helper->redirect_403();
 * $helper->redirect_301();
 * 
 */

class Helper
{
	public function helper()
    {
        echo "dalam development";
    }
}