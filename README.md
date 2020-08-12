<!-- title -->

# MINI MVC PHP NATIVE

<!-- Description -->
<p>Hi, Project ini dibuat dari latihan saya belajar web programing dari berbagai sumber di internet seperti youtube, stackoverflow dan github. project ini merupakan php native yang di buat menggunakan pattern MVC dengan konsep OOP (Object oriented programing ), mirip framework codeigniter 3, yang saya pelajari di YT WPU oleh Sandhika galih dan sudah saya modifikasi custom menyesuaikan tugas kuliah saya serta penambahan library lainnya.</p>
<p>include libraries external : jquery, bootstrap 4.2.5, owl.js , slick.js, composer, ckeditor-5, chartjs, fontawensome, datatable.js, phpoffice, mpdf saya satukan agar lebih mudah untuk mencarinya</p>

---
<!-- table of content -->
## Daftar isi Content

* **Contributor**
*  **Documentation**

	*  **installation**
		1.  *install composer*
		2.  *install phpxdebug*
		3.  *install git-client*
		4.  *clone myrepository mini mvc php native*
		5.	*composer update*

	* **Documentation Libraries Package**
		1. Boostsrap
		2. CKEditor 5
		3. Jquery.js
		4. Datatable.js
		5. Slick.js
		6. Chart.js
		7. fontawensome
		8. phpoffice/phpspreadsheet
		9. mjaschen/phpgeo
		10. mpdf/mpdf

	* **Basic Guide**
		1. Core Folder
		2. Database Config
		3. Controller
		4. Views
		5. Models

* **Support Dev**

## Installation
description

1. install composer

	* untuk cara pakainya pertama siapkan atau setting envirotment terbelih dahulu, yaitu menginstal composer. 	[Composer](https://getcomposer.org) adalah sebuah package manager untuk php language atau untuk bahasa php. kamu bisa download composer windows pada link ini 
	[Composer](https://getcomposer.org/download/). lalu pilih windows installer

2. install phpdebug
	* untuk menginstall php debug, pastikan php yang berjalan dilocal server kamu adalah versi 7. atau lebih tinggi. xdebug digunakan untuk membuat error dan debuging php menjadi lebih rapih. silahkan download dan ikuti dokumentasi yang diberikan oleh xdebug [xdebug](https://xdebug.org/wizard). 

3. install git client
	* untuk melakukan clone petama harus menginstall git client terlebih dahulu, git adalah sebuah  source control management atau scm. silahkan install [git](https://git-scm.com/downloads)

4. clone repository mini mvc php native
	* untuk melakukan clone repository buka terminal atau cmd atau gitbash. agar lebih mudah, langsung clone pada directory localserve. xampp => htdoc 

	```
	
	git clone https://github.com/naagaraa/mini-mvc-phpnative.git

	```
5. composer update
	* setelah melakukan clone repo, saya sarankan untuk melakukan composer update untuk mengecek apakah pada folder/vendor ada upate package. dengan jalankan pada terminal atau command seperti ini.

	```

	composer update

	``` 



## Documentation Libraries Packages
untuk Documentasi cara penggunaan masing masing libraries yang saya includekan pada folder vendor dan public/assets saya cantumkan di link berikut :

* [Boostsrap](https://getbootstrap.com/docs/4.5/getting-started/introduction/)
* [CKEditor-5](https://ckeditor.com/docs/ckeditor5/latest/builds/)
* [Jquery.js](https://api.jquery.com/)
* [Datatable.js](https://datatables.net/)
* [Slick.js](https://kenwheeler.github.io/slick/)
* [Chart.js](https://www.chartjs.org/)
* [fontawensome](https://fontawesome.com/icons?d=gallery&m=free)
* [phpoffice/phpspreadsheet](https://phpspreadsheet.readthedocs.io/en/latest/)
* [mjaschen/phpgeo](https://github.com/mjaschen/phpgeo)
* [mpdf/mpdf](https://mpdf.github.io/)


## Basic Penjelasan 
basic guide ini adalah penjelasan dasar tentang structur yang akan saya bahas. project ini terdiri dari 4 folder, yaitu apps, public, upload, dan vendor. apps berisi semua fungsi dan konsept MVC ada di dalamannya. folder public adalah tempat saya meletakan assets seperti css dan js, maupun assets jika menggukanan template. upload adalah tempat saya meletakan file uploads berupa gambar. folder vendor adalah assets yang di download melalu composer.

* apps
	* config
	* controller
	* core
	* libraries
	* models
	* views
* public
	* boostraps
* uploads
	* contents
	* user 
* vendor
	* phpoffice
	* ...

## Folder Apps

folder apps terdiri dari beberapa bagian yaitu :
* apps
* public
* uploads
* vendor
* composer.json
* .htaccess

## Database Config dan URL
* config
	* config => untuk configurasi root URL dan set database

	#### URL root dan Assets

	```
	define('Assets', 'http://localhost/MINI-PHP-MVC/public');
	define('URL', 'http://localhost/MINI-PHP-MVC/');
	```


	yang nantinya bisa digunakan pada berkas views untuk membuat url dynamis atau kita langsung mendeklarasikan url untuk root dan asset
	**exmpale** :

	```
	<!-- pada hyper link navigation-->
	<a href="<?= URL . 'home' ?>">Docs</a>
	
	<!-- pada hyper link source -->
	<link rel="stylesheet" href="<?= BASE_URL . '/admin'; ?>/vendor/bootstrap/css/bootstrap.min.css">

	```

	#### Database Config
	untuk configurasi database digunakan pada file apps/config/config.php sesuaikan database mysql yang digunakan :

 * *DB_HOST			=> nama host*
 * *DB_USER			=> user pada database*
 * *DB_PASSOWRD	=> password pada Database*
 * *DB_NAMA			=> nama Database*

 **example :**
 ```
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_contents');
 ```

## Controller

* controller
	* welcome.php => contoh controller default yang saya deklarasikan
	#### controller
	pada controller digunakan untuk mengatur semua logika program yang ada seperti validation form, login, dan lain lain.
	untuk membuat controller caranya tinggal buat langsung filenya atau simpan ke dalam sebuah folder jika memiliki banyak controller.

	contoh folder :
	> controllers/admin/login.php
	<br>
	> controllers/user/home.php
	<br>
	> controllers/Welcome.php

	```
	class Welcome extends Controller
	{
		public function __construct()
		{
			#your code here
		}

		public function index()
		{
			#your code here
			$this->view('Welcome');
		}

		// add beberapa function yang kamu butuhkan
		public function example()
		{
			#your code
			php_info();
		}

	}
	```

* [x] core
	* sedang dalam penulisan 
* [x] libraries
	* sedang dalam penulisan 

## Models
* models
	* Artikel_model.php => example penulisan model yang saya includekan pada project

	#### Models

	Models digunakan untuk melakukan Query pada database, semua query database saya definisikan pada folder models ini dan membuat models nya masing masing, example jika ingin melakukan CRUD pada table artikel bisa membuat models dengan nama Article_models.php

	```
	class Artikel_model
	{
		private $table = 'tb_artikel';
		private $db;

		public function __construct()
		{
			$this->db = new Database;
		}

		public function getAllArtikel()
		{
			$this->db->query('SELECT * FROM ' . $this->table);
			return $this->db->resultSet();
		}
	}
	```

	dan untuk menggunakan atau memanggil models pada controller tinggal gunakan saja. example :

	```
	class Welcome extends Controller
	{
		public function __construct()
		{
			#your code here
		}

		public function index()
		{
			#your code here
			$data = $this->model('nana-modelnya')->functionmodel(params);
			$this->view('Welcome');
		}
	}
	```

	**fungsi untuk hasil query database :**
	* resultSet() => semua data dalam bentuk array assoc
	* single() => single data dalam bentuk array assoc
	* rowCount() => hasil jumlah colomn pada tabel


## Views
* views
	* welcome.php => file ini berisi file html yang digunakan untuk interface yang saya buat untuk default

	#### views 
	views disimpan pada folder views bisa berisi template atau stuktur template yang dipecah menjadi beberapa folder, seperti templateuser, user.
	> views/templateuser/header.php
	<br>
	> views/templateuser/footer.php
	<br>
	>views/user/Home.php
	<br>

	yang nantinya bisa panggil pada controller :
	example :

	```
		class Welcome extends Controller
	{
		public function __construct()
		{
			#your code here
		}

		public function index()
		{
			#your code here
			$this->view('index');
			$this->view('header');
			$this->view('Home');
			$this->view('footer');
		}

	}
	```

	untuk mengirim data dalam views example :

	```
		class Welcome extends Controller
	{
		public function __construct()
		{
			#your code here
		}

		public function index()
		{
			#your code here
			$data['data_artikel'] = $this->model('nana-modelnya')->functionmodel(params);
			$this->view('Welcome', $data);
		}
	}
	```

	lalu pada halaman views kita tampilkan nama key array assocnya
	example

	```
	<div class="container">
		<span><?php echo $data[data_artikel] ?></span>
	</div>
	```

	atau bisalakukan debug pada halaman views dengan seperti berikut
	example
	```
	<?php var_dump($data['data_artikel']);
	die();?>
	<div class="container">
		<span><?php echo $data['data_artikel'] ?></span>
	</div>
	```


## support Dev
<br>
<!-- description -->
hi, kamu bisa support dengan cara follow account sosial media di bawah atau memberikan kami coffee
<br>

<!-- Links -->
**Please support me :**

*Youtube Channel* : 
* Sandhika galih : [ YT Web programing unpas ](https://www.youtube.com/channel/UCkXmLjEr95LVtGuIm3l2dPg)

* Naagaraa : [ YT Naagaraa ](https://www.youtube.com/channel/UCYsZhw6Mlk23Q-nUPP9t1YA?view_as=subscriber)

 *instagram* : 
 
* Sandhika galih : [ IG Web programing unpas ](https://www.instagram.com/sandhikagalih/)

* Naagaraa : [ IG Naagaraa ](https://www.instagram.com/naagaraa/)
