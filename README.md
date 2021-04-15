<!-- title -->

# MINI MVC PHP NATIVE PROJECT

<!-- Description -->
<p>indoneisa : </p>
<p>Hi, Project ini dibuat dari latihan saya belajar web programing dari berbagai sumber di internet seperti youtube, stackoverflow dan github. project ini merupakan php native yang di buat menggunakan pattern MVC dengan konsep OOP (Object oriented programing ), mirip framework codeigniter 3, yang saya pelajari di YT WPU oleh Sandhika galih dan sudah saya modifikasi custom menyesuaikan tugas kuliah saya serta penambahan library lainnya.</p>
<p>list library external yang mungkin dibutuhkan : jquery, bootstrap 4.2.5, owl.js , slick.js, composer, ckeditor-5, chartjs, fontawensome, datatable.js, phpoffice, mpdf saya satukan agar lebih mudah untuk mencarinya</p>
<p>English : </p>
<p>Hi, this project was made from my practice to learn web programming from various sources on the internet such as YouTube, Stackoverflow and Github. This project is a native php that is made using the MVC pattern with the concept of OOP (Object oriented programming), similar to the Codeigniter 3 framework, which I learned at YT WPU by Sandhika Galih and I have custom modifications to suit my college assignments and the addition of other libraries.</p>
<p>include external libraries: jquery, bootstrap 4.2.5, owl.js, slick.js, composer, ckeditor-5, chartjs, fontawensome, datatable.js, phpoffice, mpdf I put together to make it easier to find</p>
---

<!-- table of content YT -->
#### Documentasi saya dalam bentuk  video bahasa indonesia
* **playlist** [ Youtube ](https://www.youtube.com/playlist?list=PLK5_CL-hAKCf-H7snj3RlLVjrkJ7yql6o)

<!-- table of content YT -->
#### Fork repo
<p>jika mau clone repo ini ke github kalian, kalian tinggal klik forked di pojok kanan atas. thx</p>

<!-- table of content -->
#### Note 
* saya sering melakukan update pada repo, saya sarankan untuk melakukan
git pull jika terdapat ada update ahahaha

<!-- update -->
#### Update 
* saya sedang development untuk implementation template engine menggunakan twig dari symfony
 [ **Documentasi Resmi Twig 3.x** ](https://twig.symfony.com/doc/3.x/) 

<!-- table of content -->
## Daftar isi Content

*note : libraries has been delete, libraries yang sudah saya includkan sudah saya delete karna terlalu banyak resource dan memberatkan, alternatif , bisa install sendiri dan tetap saya cantumkan di link documentation atau deskripsi

* **Author dan Contributor**
*  **Documentation**

	*  **installation**
		1.  *install composer*
		2.  *install phpxdebug* (optional : agar debug rapih/ pretty )
		3.  *install git-client*
		4.  *clone myrepository mini mvc php native*

	* **Documentation Libraries Package**
		1. Boostsrap
		2. CKEditor 5
		3. Jquery.js
		4. Datatable.js
		5. Slick.js
		6. Chart.js
		7. sweatalert.js
		8. fontawensome
		9. phpoffice/phpspreadsheet
		10. mjaschen/phpgeo
		11. mpdf/mpdf
		12. phpmailer/phpmailer

	* **Basic Guide**
		1. Core Folder
		2. api
		3. Database Config
		4. Controller
		5. Views
		6. Models
		7. Routing

* **Support Me**

## Author dan Contribution

* **Naagaraa Mahasiswa Darma Persada dan Content Creator**  [ instagram ](https://www.instagram.com/naagaraa/)
* **Sandhikagalih Dosen Unpas dan Content Creator** [ Instagram ](https://www.instagram.com/sandhikagalih/)


## Installation manual
description or requretment

1. install composer

	* untuk cara pakainya pertama siapkan atau setting envirotment terbelih dahulu, yaitu menginstal composer. 	[Composer](https://getcomposer.org) adalah sebuah package manager untuk php language atau bahasa php. kamu bisa download composer untuk windows pada link ini 
	[Composer](https://getcomposer.org/download/). lalu pilih windows installer

2. install phpdebug
	* untuk menginstall php debug, pastikan php yang berjalan dilocal server kamu adalah versi 7.2 atau lebih tinggi. xdebug digunakan untuk menampilkan  error yang ada dan debuging php menjadi lebih rapih. silahkan download dan ikuti dokumentasi yang diberikan oleh xdebug [xdebug](https://xdebug.org/wizard). 

3. install git client
	* untuk melakukan clone repo  hal petama harus yaitu bisa dengan menginstall git client terlebih dahulu, git adalah sebuah  source control management atau scm. silahkan install [git](https://git-scm.com/downloads) disini.

4. clone repository mini mvc php native
	* untuk melakukan clone repository buka terminal atau cmd atau gitbash. agar lebih mudah, langsung clone pada directory localserve. pada folder xampp => htdoc 

	```
	
	git clone https://github.com/naagaraa/mini-mvc-phpnative.git

	```

5. composer install
	* setelah melakukan clone repo, saya sarankan untuk melakukan composer install untuk mengecek apakah pada folder/vendor ada package yg tersedia. dengan jalankan command pada terminal atau commandline seperti ini.

	```

	composer install

	``` 

## Installation via composer 
1. buka / masuk dalam folder htdocs

	```

	c:\xampp> cd htdocs

	``` 
	```

	c:\xampp\htdocs> 

	``` 
2. composer create project
	<p>dev master </p>

	```

	composer create-project nagara/mini-mvc-php-native:dev-master namaprojectnya

	``` 

	```

	composer create-project nagara/mini-mvc-php-native:dev-master belajarmvc

	``` 
	<p>update terbaru atau latest version : </p>

	```

	c:\xampp\htdocs> composer create-project nagara/mini-mvc-php-native belajaramvc

	``` 


3. update envirotment project

	```

	c:\xampp\htdocs> cd belajaramvc

	``` 
	```

	c:\xampp\htdocs\belajaramvc> php nagara generate:env

	``` 

## jika envirotment project tidak ada
"mendapat error Gagal Terhubung ke Server" maka lakukan ini :

	```

	c:\xampp\htdocs> cd belajaramvc

	``` 
	```

	c:\xampp\htdocs\belajaramvc> php nagara generate:copyenv

	``` 
	```

	c:\xampp\htdocs\belajaramvc> php nagara generate:env

	``` 



## Documentation Libraries Packages
untuk Documentasi cara penggunaan masing masing libraries yang saya include-kan pada folder vendor dan public/assets saya cantumkan di link berikut :

* [Boostsrap](https://getbootstrap.com/docs/4.5/getting-started/introduction/)
* [CKEditor-5](https://ckeditor.com/docs/ckeditor5/latest/builds/)
* [Jquery.js](https://api.jquery.com/)
* [Datatable.js](https://datatables.net/)
* [Slick.js](https://kenwheeler.github.io/slick/)
* [Chart.js](https://www.chartjs.org/)
* [sweatalert.js](https://sweetalert.js.org/)
* [fontawensome](https://fontawesome.com/icons?d=gallery&m=free)
* [phpoffice/phpspreadsheet](https://phpspreadsheet.readthedocs.io/en/latest/)
* [mjaschen/phpgeo](https://github.com/mjaschen/phpgeo)
* [mpdf/mpdf](https://mpdf.github.io/)


## Basic Penjelasan 
basic guide ini adalah penjelasan dasar tentang structur yang akan saya bahas. project ini terdiri dari 4 folder, yaitu apps, public, upload, dan vendor. apps berisi semua fungsi dan konsept MVC ada di dalamannya. folder public adalah tempat saya meletakan assets seperti css dan js, dan  upload adalah tempat saya meletakan file uploads berupa gambar atau yang lainnya. folder vendor adalah assets yang di download melalu composer.

* apps
	* config
	* controller
	* core
	* libraries
	* models
	* routes
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
* system
* vendor
* composer.json
* .htaccess

## Database Config dan URL
* config
	* config => untuk configurasi root URL dan set database

	#### URL root dan Assets
	
	
	**define('name', 'url-pada-browser/location-path');**

	```
	define('ASSET', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/public'');
	define('URL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');
	define('BASEURL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');
	```


	yang nantinya bisa digunakan pada berkas views untuk membuat url dynamis atau kita langsung mendeklarasikan url untuk root dan asset
	**exmpale** :

	```
	<!-- pada hyper link navigation-->
	<a href="<?= URL . 'home' ?>">Docs</a>
	
	<!-- pada hyper link source -->
	<link rel="stylesheet" href="<?= URL . '/admin'; ?>/vendor/bootstrap/css/bootstrap.min.css">

	```

	Membuat path location pada  folder, untuk membuat path atau mendeklarasi path diletakan pada file apps/config/constant.php
	**exmpale** :

	
	```
	define("PathCover", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/contents/cover/');
	define("PathImage", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/contents/cover/');
	```

	#### Database Config
	untuk configurasi database yang digunakan terletak pada pada file apps/config/config.php sesuaikan database mysql yang kamu digunakan :

	**config :**

	* *DB_HOST			=> nama host*
	* *DB_USER			=> user pada database*
	* *DB_PASSOWRD		=> password pada Database*
	* *DB_NAMA			=> nama Database*

	**config/database.php :**
	```
	define('DB_HOST', ($configuration['DB_HOST']) 		? $configuration['DB_HOST'] 		: 'localhost');
	define('DB_USER', ($configuration['DB_USERNAME']) 	? $configuration['DB_USERNAME'] 	: 'root');
	define('DB_PASS', ($configuration['DB_PASSWORD']) 	? $configuration['DB_PASSWORD'] 	: '');
	define('DB_NAME', ($configuration['DB_NAME']) 		? $configuration['DB_NAME'] 		: '');
	```

	untuk configurasi file database sekarang ada file .env, apps/.env

	**exampale** :
	```
	# config file .env untuk configurasi pada file
	# apps/config/config.php

	# configurasi Path here 
	APP_NAME=mini-mvc-phpnative
	APP_HOST=http://localhost/
	APP_URL=http://localhost/mini-mvc-phpnative/

	# configurasi Database here
	DB_HOST=localhost
	DB_PORT=3306
	DB_NAME=
	DB_USERNAME=root
	DB_PASSWORD=

	```





## Define Constant

**define('name', 'url-pada-browser/location-path');**

### Define constant

Membuat path location pada  folder, untuk membuat path atau mendeklarasi path diletakan pada file apps/config/constant.php
**exmpale** :


```
define("PathCover", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/contents/cover/');
define("PathImage", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/contents/cover/');
```


## Controller

* controller
	* welcome.php => contoh controller default yang saya deklarasikan
	#### controller
	pada controller digunakan untuk mengatur semua logika program yang ada seperti validation form, login, dan lain-lain.
	untuk membuat controller caranya tinggal buat langsung **{filenya}** atau simpan ke dalam sebuah **{folder}** jika memiliki banyak controller.

	**contoh folder :**
	> controllers/admin/login.php
	<br>
	> controllers/user/home.php
	<br>
	> controllers/Welcome.php

	```
	<?php
	use MiniMvc\Apps\Core\Bootstraping\Controller;

	/**
	* Documentasi Code
	*/

	class MainController extends Controller
	{
		public function __construct()
		{
			// constructor here

		}
		public function index()
		{
			// code index here
			$data = [
				'judul' => "Example view",
				'content' => "this is content"
			];

			$this->view("nameofview", $data);
		}

		public function show($request)
		{
			// code here show here
		}

		public function create()
		{
			// code here create here
		}

		public function update($request)
		{
			// code here update here
		}

		public function remove($request)
		{
			// code here remove here
		}
	}
	```

* [x] core
	* **sedang dalam penulisan** 
* [x] libraries
	* **sedang dalam penulisan**

## Models
* models
	* Artikel_model.php => example penulisan model yang saya includekan pada project

	#### Models

	Models digunakan untuk melakukan Query pada database, semua query database saya definisikan pada folder models ini dan membuat models nya masing masing, example jika ingin melakukan CRUD pada table artikel bisa membuat models dengan nama **Artikel_model.php**


	###### Model Artickel_model.php
	```
	<?php
	use MiniMvc\Apps\Core\Bootstraping\Database;

	/**
	* -----------------------------------------------------------------------
	* Documentasi Code
	* -----------------------------------------------------------------------
	* 
	* untuk melakukan query pada tabel dalam database silahkan lakukan disini
	* query dibuat dalam bentuk public function yang nantinya akan digunakan
	* pada controller. berikut ini adalah example dari models yang
	* tersedia,
	*/

	class MainModel
	{
		private $table = 'tb_name';
		private $db;

		public function __construct()
		{
			$this->db = new Database;
		}

		public function getall()
		{
			$this->db->query('SELECT * FROM ' . $this->table);
			return $this->db->resultSetArray();
		}

		public function get_data_by_condition($urlid)
		{
			$this->db->query('SELECT * FROM ' . $this->table . ' WHERE urlid=:urlid');
			$this->db->bind('urlid', $urlid);
			return $this->db->singleArray();
		}


		public function insert_data($data)
		{
			// INSERT INTO `tb_visitor`(`id`, `urlid`,`uniqid`, `judul_content`, `visit_views`, `visitor_ip`, `date`) 
			$query = "INSERT INTO $this->table VALUES ('',:uniqid , :urlid, :judul_content, :visit_views, :visitor_ip, :waktu)";
			$this->db->query($query);

			// binding untuk data text
			$this->db->bind('uniqid', $data['uniqid']);
			$this->db->bind('urlid', $data['urlid']);
			$this->db->bind('judul_content', $data['judul']);
			$this->db->bind('visit_views', $data['current_visit']);
			$this->db->bind('visitor_ip', $data['remote_adr']);
			$this->db->bind('waktu', $data['posting']);

			$this->db->execute();
			return $this->db->rowCount();
		}

		public function remove_data_by_condition($uniqid)
		{
			$this->db->query('DELETE FROM ' . $this->table . ' WHERE uniqid=:uniqid');
			$this->db->bind('uniqid', $uniqid);

			$this->db->execute();
			return $this->db->rowCount();
		}

		public function update_data($data)
		{
			// UPDATE `tb_visitor` SET `id`=[value-1],`urlid`=[value-2],`judul_content`=[value-3],`visit_views`=[value-4],`visitor_ip`=[value-5],`waktu`=[value-6] WHERE 1
			$query = "UPDATE " . $this->table . " SET id=:id, uniqid=:uniqid, urlid=:urlid, judul_content=:judul_content, visit_views=:visit_views, visitor_ip=:visitor_ip, waktu=:waktu WHERE uniqid=:uniqid";
			$this->db->query($query);

			// binding untuk data text
			$this->db->bind('id', $data['id']);
			$this->db->bind('uniqid', $data['uniqid']);
			$this->db->bind('urlid', $data['urlid']);
			$this->db->bind('judul_content', $data['judul_content']);
			$this->db->bind('visit_views', $data['visit_views']);
			$this->db->bind('visitor_ip', $data['visitor_ip']);
			$this->db->bind('waktu', $data['waktu']);

			$this->db->execute();
			return $this->db->rowCount();
		}
	}
	```

	dan untuk menggunakan atau memanggil models pada controller tinggal gunakan saja command berikut. example pada controller **Welcome.php**:


	> **$this->model('nama-modelnya')->functionmodel(params);**

	##### Class Welcome.php
	
	contoh penggunaan pada Controller Welcome

	**exmpale** :

	```
	use MiniMvc\Apps\Core\Bootstraping\Database;

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

	**fungsi untuk hasil query pada database :**
	* resultSetArray() => semua data dalam bentuk array assoc format
	* resultSetObject() => semua data dalam bentuk array object format
	* resultSetJSON() => semua data dalam bentuk array JSON format
	* singleArray() => single data dalam bentuk array assoc format
	* singleObject() => single data dalam bentuk array obect format
	* singleJSON() => single data dalam bentuk array JSON format
	* rowCount() => hasil jumlah colomn pada tabel

## Routes
* Routes
	* api.php => ondevelop
	* web.php => untuk mengatur routing

	#### web

	Web digunakan untuk mengatur alur routing atau alur dari sebuah pat url akan di handle seperti apa


	###### web.php
	```
	<?php

	namespace MiniMvc\Apps\Routes\Bootstraping;

	use MiniMvc\Apps\Core\Bootstraping\Routes;
	use \Bramus\Router\Router;

	class Web extends Routes
	{
		/**
		* -------------------------------------------------------------------------------
		* Documentasi Code Web
		* Author : nagara
		* -------------------------------------------------------------------------------
		* 
		*  untuk mengatur Route view yang diambil pada controller
		*  Route menggunakan library bramus/router
		* 
		* -------------------------------------------------------------------------------
		*  Example 
		* -------------------------------------------------------------------------------
		* 
		* 	$router->get('/login', function () {
		*      // handle here
		*  	$this->Routing('folder/controller', 'method');
		*  die;
		* 	});
		* 
		* 	$router->get('/news/{slug}', function ($slug) {
		* 		// handle here
		*  	$this->Routing('folder/controller', 'method',[$slug]);
		*  die;
		* 	});
		* 
		* 	$router->get('/about', function () {
		* 		// handle here
		*  	$this->Routing('controller', 'method');
		* 	die;
		* 	});
		* 
		* 	$router->get('/info', function () {
		* 		// handle here
		*  	phpinfo();
		*  die;
		* 	});
		* --------------------------------------------------------------------------------
		* 
		* 
		*/

		public function __construct()
		{
			// Create a Router object
			$router = new Router();

			// your route here
			$router->get('/info-php', function () {
				$this->Routing('welcome', 'show');
			});
			$router->get('/', function () {
				$this->Routing('welcome', 'index');
			});

			// run route!
			$router->run();
		}
	}
	```

	dan untuk custor route pada **Web.php**:


	> **$this->Routing('controller', 'method',['params'])**


	**config pada routing :**
	* $this->Routing('controller', 'method') => tampa parameter
	* $this->Routing('controller', 'method', ['params']) => menerima parameter

	**example pada routing :**
	* $this->Routing('Welcome', 'show') => tampa parameter
	* $this->Routing('About', 'profile', [$slug]) => menerima parameter

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

	> **$this->view('namaviews-nya');**

	```
	use MiniMvc\Apps\Core\Bootstraping\Database; 

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
	> **$this->view('Welcome', $databentuk-array-assoc);**

	```
	use MiniMvc\Apps\Core\Bootstraping\Database;

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
	atau 

	```
	<div class="container">
		<span><?= $data[data_artikel] ?></span>
	</div>
	```

	atau bisa lakukan debug pada halaman views dengan seperti berikut
	example
	```
	<?php var_dump($data['data_artikel']);
	die();?>
	<div class="container">
		<span><?php echo $data['data_artikel'] ?></span>
	</div>
	```


## support Me
<br>
<!-- description -->
hi, kamu bisa support dengan cara follow account sosial media di bawah atau memberikan kami kopi pada link di bio social media mereka dibawah ini
<br>

<!-- Links -->
**Please support me :**

*Youtube Channel* : 
* Sandhika galih : [ YT Web programing unpas ](https://www.youtube.com/channel/UCkXmLjEr95LVtGuIm3l2dPg)

* Naagaraa : [ YT Naagaraa ](https://www.youtube.com/channel/UCYsZhw6Mlk23Q-nUPP9t1YA?view_as=subscriber)

 *instagram* : 
 
* Sandhika galih : [ IG Web programing unpas ](https://www.instagram.com/sandhikagalih/)

* Naagaraa : [ IG Naagaraa ](https://www.instagram.com/naagaraa/)


 *Donasi ?* : 
* Naagaraa : [ Traktir baso aja ](https://saweria.co/naagaraa)