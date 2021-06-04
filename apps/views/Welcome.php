<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="welcome message">
	<meta name="keywords" content="mini mvc php native project">
	<meta name="author" content="nagara">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>NAGARA/MINI MVC</title>

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= asset('image/ico') ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= asset('image/ico') ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= asset('image/ico') ?>/favicon-16x16.png">
	<link rel="manifest" href="<?= asset() ?>site.webmanifest">


	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link rel="stylesheet" href="<?= asset('css/fontfamily.css') ?>">

	<link rel="stylesheet" href="<?= asset('css/style.min.css') ?>">

	<!-- Bootstrap 5 CDN-->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

	<link rel="stylesheet" href="<?= asset('css/style.min.css') ?>">
</head>

<style>
	.theme {
		background-color: dark-grey;
		margin-top: 5rem;
	}

	.card-list {
		width: 11rem !important;
		height: 11rem !important;
		border-radius: 25px;
		cursor: pointer;
		font-size: small;
	}

	.nav-card {
		display: inline-block;
		text-decoration: none;
		color: inherit;
	}

	.color-one:hover {
		background-color: #7CDEDC;
		color: white;
	}

	.color-two:hover {
		background-color: #DEC0F1;
		color: black;
	}

	.color-three:hover {
		background-color: #F21B3F;
		color: white;
	}

	.color-four:hover {
		background-color: #FFC43D;
		color: black;
	}

	.color-five:hover {
		background-color: #101419;
		color: white;
	}

	.color-six:hover {
		background-color: #5F00BA;
		color: white;
	}

	.color-seven:hover {
		background-color: #08BDBD;
		color: white;
	}

	.color-eight:hover {
		background-color: #2541B2;
		color: white;
	}

	.code{
		background-color: black;
		padding: 10px;
		color: greenyellow;
		font-weight: bold;
	}
</style>

<body id="my-theme" class="theme">
	<div class="container my-3">
		<div class="row d-flex justify-content-center">
			<div class="col-10">
				<div class="row mt-5">
					<div class="col">
						<h1>MINI MVC PHP NATIVE</h1>
						<p class="text-muted">project mini mvc php native develop by eka jaya nagara as miyuki nagara, my background can't used framework popular php like  CI or Laravel for finish exam "kerja praktik", so I'm develop this is.</p>
						<span>kamu bisa mencoba Edit tampilan view ini : </span>
						<p class="code mt-2">welcome page = apps/views/welcome.php</p>
					</div>
				</div>
				<div class="row d-flex justify-content-center g-4">
					<div class="col-md-3">
						<a class="nav-card" href="https://www.youtube.com/channel/UCYsZhw6Mlk23Q-nUPP9t1YA">
							<div class="card card-list border-primary color-three">
								<div class="card-body">
									<h5 class="card-title">Youtube</h5>
									<h6 class="card-subtitle mb-3 text-muted">Support</h6>
									<p class="card-text">support me on this platform</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a class="nav-card" href="https://saweria.co/naagaraa">
							<div class="card card-list border-primary color-four">
								<div class="card-body">
									<h5 class="card-title">Saweria</h5>
									<h6 class="card-subtitle mb-3 text-muted">Donation ID</h6>
									<p class="card-text">Give me Donation on this platform</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a class="nav-card" href="http://docs.minimvcphp.nagara.my.id/">
							<div class="card card-list border-primary color-five">
								<div class="card-body">
									<h5 class="card-title">Documentation</h5>
									<h6 class="card-subtitle mb-3 text-muted">mini mvc docs</h6>
									<p class="card-text">documentation official</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a class="nav-card" href="<?= url('info') ?>">
							<div class="card card-list border-primary color-six">
								<div class="card-body">
									<h5 class="card-title">PHP version</h5>
									<h6 class="card-subtitle mb-3 text-muted">Support</h6>
									<p class="card-text">check versi php yang terinstall</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="container text-center my-4">
		<p>Copyright &copy; 2018-<?= year_now() ?> Backend By Eka Jaya Nagara as miyuki nagara</p>
	</footer>

	<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>