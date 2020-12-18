<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PHP NATIVE MVC</title>

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= ASSET . '/admin'; ?>/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= ASSET . '/admin'; ?>/img/favicon.png">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Bootstrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!-- Styles -->
	<style>
	html,
	body {
		background-color: #1b1b1b;
		color: white;
		font-size: large;
		font-family: 'Nunito', sans-serif;
		font-weight: bold;
		height: 100vh;
		margin: 0;
	}

	.full-height {
		height: 100vh;
	}

	.flex-center {
		align-items: center;
		display: flex;
		justify-content: center;
	}

	.position-ref {
		position: relative;
	}

	.top-right {
		position: absolute;
		right: 10px;
		top: 18px;
	}

	.content {
		text-align: center;
	}

	.title {
		font-size: 50px;
	}

	.links>a {
		color: white;
		padding: 0 25px;
		font-size: 13px;
		font-weight: 600;
		letter-spacing: .1rem;
		text-decoration: none;
		text-transform: uppercase;
	}

	.m-b-md {
		margin-bottom: 30px;
	}

	.background {
		width: 800px;
		height: 80px;
		background-color: #2b2bff;
		margin: auto;
	}
	</style>
</head>

<body>
	<div class="flex-center position-ref full-height">
		<div class="content">
			<div class="title m-b-md">
				<div class="background">
					MINI-MVC PHP-NATIVE
				</div>
			</div>

			<div class="links">
				<a href="<?= URL . 'home' ?>">Docs</a>
				<a href="https://github.com/naagaraa/mini-mvc-phpnative">GitHub</a>
				<a href="<?= URL . 'kepo' ?>">Admin Dashboard</a>
			</div>
			<footer>
				<br><br>
				<p>Dibuat oleh YT WPU oleh sandhika galih, modifated custom oleh YT n1ght w0lf oleh naagaraa</p>
				<div class="container ">
					<p>ini adalah sebuah hasil pembelajaran dari PHP dasar, OOP PHP , PDO ,dan MVC dasar yang dipelajari pada
						Youtube
						Web Programming Unpas dan saya kembangkan menjadi Mini MVC PHP Native Project untuk tujuan membuat kerangka
						kerja beberapa library sudah saya includkan pada composer.json, dan saat installasi diharapkan melakukan
						composer
						install
					</p>
				</div>
			</footer>
		</div>

	</div>


</body>

</html>