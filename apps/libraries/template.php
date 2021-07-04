<?php
Namespace MiniMvc\Apps\Libraries;

/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * untuk menggunakan template libraries yang ada disini silahkan panggil mengunakan nama namespacenya
 * lalu deklarasi sebuah object baru. libraries ini dibuat jika menggunakan structur yang sudah di
 * tentukan yakni directory frontend dan backend
 * 
 * contoh :
 * use MiniMvc\Apps\Libraries\template;
 * 
 * $template = new template;
 * $template->backend();
 * $template->frontend();
 * 
 * atau 
 * 
 * template::backend()
 * template::frontend()
 * 
 */

class template 
{
    public function __construct()
    {
        # code here
    }

    /**
     * function template backend
     * @param page and data
     * @return view
     */
    public static function backend($page = "", $data)
    {
        $view = [
            "header" => read_view("backend/layout/header", $data),
            "content" => read_view("backend/pages/".$page, $data),
            "footer" => read_view("backend/layout/footer", $data),
        ];

        return $view;
    }

     /**
     * function template fronend
     * @param page and data
     * @return view
     */
    public static function frontend($page = "", $data)
    {
        $view = [
            "header" => read_view("frondend/layout/header", $data),
            "content" => read_view("frondend/pages/".$page, $data),
            "footer" => read_view("frondend/layout/footer", $data),
        ];

        return $view;
    }
}