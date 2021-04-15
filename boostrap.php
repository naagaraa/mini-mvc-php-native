<?php
/**
 * -----------------------------------------------------------------------------------------------------------
 * Documentasi Code by me
 * @author nagara dan sandhika galih
 * @pengembang eka jaya nagara atau di sapa miyuki nagara
 * 
 * -----------------------------------------------------------------------------------------------------------
 * Bootstraping adalah salah satu teknik untuk memanggil semua file pada direktori tertentu
 * menggunakan file init.php lalu di call melalui index.php 
 * 
 * @package	nagara/mini-mvc-php-native-project
 * @author	nagara solo learner in internet with other good people
 * @copyright nagara
 * @license	https://github.com/naagaraa/mini-mvc-php-native/blob/master/LICENSE.MD	MIT License
 * @link	https://github.com/naagaraa/mini-mvc-php-native
 * @since	Version project beta
 * 
 * Mini MVC PHP native
 * 
 * MIT license
 * 
 * Copyright (c) Nagara.Mini-MVC-PHP-NATIVE-PROJECT
 * 
 * Permission is hereby granted, free of charge, to whoever gets a copy this software and related documentation files ("Software"), to handle in the
 * Software without limitation, including without limitation rights to use, copy, modify, and distribute to authorize persons to whom the Software is
 * used equipped to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice should be included in all a copy or important part of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO
 * TRADEMARKED WARRANTIES, FITNESS FOR A PARTICULAR PURPOSE AND IMPERIENCE. UNDER ANY CIRCUMSTANCES THE AUTHOR OR
 * COPYRIGHT HOLDER IS NOT RESPONSIBLE FOR CLAIMS, DAMAGES OR OTHERS LIABILITY, WHETHER IN CONTRACT, EXERCISE OR OTHER
 * ACTION, ARISING FROM, EXIT OR CONNECTION WITH THE SOFTWARE OR ANY OTHER USE OR CONNECTION WITHIN SOFTWARE.
 * 
 * ------------------------------------------------------------------------------------------------------------------------------
 * Lang - Indonesia
 * 
 * Lisensi MIT
 * 
 * Hak Cipta (c) Nagara.Mini-MVC-PHP-NATIVE-PROJECT
 * 
 * Izin dengan ini diberikan, gratis, kepada siapa pun yang mendapat salinannya perangkat lunak ini dan file dokumentasi terkait ("Perangkat Lunak"),
 * untuk ditangani dalam Perangkat Lunak tanpa batasan, termasuk tanpa batasan hak untuk menggunakan, menyalin, memodifikasi, dan
 * mendistribusikan untuk memberi wewenang kepada orang-orang yang kepadanya Perangkat Lunak digunakan diperlengkapi untuk
 * melakukannya, dengan tunduk pada kondisi berikut:
 * 
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan di semua salinan atau bagian penting dari Perangkat Lunak.
 * 
 * PERANGKAT LUNAK INI DIBERIKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, TERSURAT ATAU TERSIRAT, TERMASUK NAMUN
 * TIDAK TERBATAS PADA JAMINAN MEREK DAGANG, KESESUAIAN UNTUK TUJUAN TERTENTU DAN PENGALAMAN. DALAM KEADAAN APAPUN
 * PENULIS ATAU PEMEGANG HAK CIPTA TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU LAINNYA KEWAJIBAN, BAIK DALAM
 * KONTRAK, LATIHAN ATAU TINDAKAN LAINNYA, YANG TIMBUL DARI, KELUAR ATAU SAMBUNGAN DENGAN PERANGKAT LUNAK ATAU
 * PENGGUNAAN ATAU KONEKSI LAINNYA DI DALAM PERANGKAT LUNAK.
 * 
 */

 /*
 *---------------------------------------------------------------
 * ENCIROTMENT APLIKASI
 *---------------------------------------------------------------
 *
 * applikasi dibangun dengan konsep object oriented dan presentasion
 * pattern mvc (model - view - controller ) dan Route atau routing.
 *
 * applikasi nya masih dalam bentuk pengembangan
 *
 */


 /*
 *---------------------------------------------------------------
 * REQUIRE VENDOR AUTOLOADING
 *---------------------------------------------------------------
 *
 */
require 'vendor/autoload.php';

 /*
 *---------------------------------------------------------------
 * REQUIRE ENV CREATE IMMUTABLE DIR
 *---------------------------------------------------------------
 *
 */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

 /*
 *---------------------------------------------------------------
 * REQUIRE FILE INTI YANG MELAKUKAN AUTOLOADING
 *---------------------------------------------------------------
 *
 */
require 'system/_init.php';
require_once 'apps/init.php';



 /*
 *---------------------------------------------------------------
 * USE / CALL NAMESPACE IN CORE FOLDER
 *---------------------------------------------------------------
 * let go hahaha
 */
// use MiniMvc\Apps\Core\Bootstraping\App;
use MiniMvc\Apps\Routes\Bootstraping\Web;
use MiniMvc\Apps\Routes\Bootstraping\Api;
use MiniMvc\System\Console\Filesystem;




 /*
 *---------------------------------------------------------------
 * BUAT OBJECT DARI NAMESPACE IN CORE FOLDER UNTUK FIRST RUN
 *---------------------------------------------------------------
 *
 * okay here we go
 */
$Route = new Web;
// $Api = new Api;
// $App = new App;  //upgrade versi nagara/mini-mvc next generation 

// $test = Filesystem::create_env();
// echo $test;die;


 /*
 *---------------------------------------------------------------
 * NOTE : me
 * 
 *---------------------------------------------------------------
 *
 * Project ini sepenuhnya di dipelajari oleh saya nagara yang 
 * mempelajari programing php melalui internet dan youtube dan
 * salah satunya adalah channel web programing unpas bersama
 * pak sandhika galih sebagai dasar dan terus dikembangkan hingga
 * saat ini oleh saya dan lahir mini mvc
 * 
 */
