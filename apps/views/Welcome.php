<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="welcome message">
	<meta name="keywords" content="mini mvc php native project">
	<meta name="author" content="nagara">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>NAGARA/MINI MVC PHP NATIVE </title>

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= asset('image/php-logo.png') ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=  asset('image/php-logo.png') ?> ">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link rel="stylesheet" href="<?= asset('css/fontfamily.css') ?>">

	<!-- Bootstrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">

	<!-- Styles -->
	<style>
	* {
    font-display: swap
	}

	.theme {
		background-color: black;
		background-image: url('<?= asset('image/background.jpg') ?>');
		background-repeat: no-repeat;
		background-size: cover;
		/* background-position-y: -50px; */
		width: 100%;
		height: auto;
		color: #cf0237;
		font-size: medium;
		font-family: 'Nunito', sans-serif;
		font-weight: bold;
		height: 100vh;
		position: fixed;
		margin: 0;
	}

	.text {
		color: #7c7c7c;
		text-align: start;
	}

	.color-orange {
		background-color: #cf0237;
		color: white;
	}

	.color-orange:hover {
		color: white;
	}

	.dark-theme {
		background-color: black;
		color: white;
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

	.links> li a {
		display: inline-block;
		padding-top: 2vh;
		color: #e1eaf9;
		font-weight: 600;
		letter-spacing: 0.4rem;
		text-decoration: none;
		text-transform: uppercase;
	}

	.links{
		font-size: 22px;
		margin-top: 25px;
		margin-left: -35px;
	}

	.links a:hover{
		color: #cf0237;
	}

	.mt-20{
		margin-top: 10vh;
	}

	.mr-20{
		margin-left: 10vw !important;
	}

	.m-b-md {
		margin-bottom: 30px;
	}

	.background h1 {
		font-weight: bold;
	}

	footer{
		display: flex !important;
		justify-content: flex-end;
		font-size: small;
		color: #7c7c7c;
		marker: auto;
		margin-right: 50px !important;
	}
	</style>
</head>

<body id="my-theme" class="theme">
	<div class="container mr-20 ">
		<div class="row mt-20">
			<div class="col">
				<div class="background">
					<h1>NAGARA/MINI MVC PHP NATIVE</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="text">
					simple mvc php native project learn at sandhika galih, develop by nagara alias name on internet miyuki nagara and my real name is secret
					<br>*note
					my english is not fluent also not good, but I love programming and computer sains
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-5">
				<ul type="none" class="links" >
					<li><a href="https://naagaraa.github.io/documentation-mini-mvc-php-project/" target="_blank" >DOCUMENTATION</a></li>
					<li><a href="https://github.com/naagaraa/mini-mvc-phpnative" target="_blank">GITHUB</a></li>
					<li><a href="https://www.youtube.com/playlist?list=PLK5_CL-hAKCf-H7snj3RlLVjrkJ7yql6o" target="_blank">YOUTUBE</a></li>
					<li><a href="https://www.instagram.com/naagaraa/" target="_blank">INSTAGRAM</a></li>
					<li><a href="https://dribbble.com/naagaraa/" target="_blank">DRIBBLE</a></li>
					<li><a href="<?= url('info') ?>" target="_blank">PHP INFO</a></li>
					<li><a href="<?= url('login') ?>" >Login Page (Stisla)</a></li>
					<li><a href="<?= url('register') ?>" >Register Page (Stisla)</a></li>
				</ul>
			</div>
		</div>
		<div class="row me-5">
			<div class="col d-flex fixed-bottom justify-content-end ">
				<footer>
					<p>source image : photo by Sebastiaan Stam from Pexels</p>
				</footer>
			</div>
		</div>
	</div>

	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
		integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
		crossorigin="anonymous"></script>
	<script>
	// $(document).ready(function() {
	// 	$("#theme").click(function(e) {
	// 		$("#my-theme").toggleClass("dark-theme");
	// 		$(this).toggleClass("btn-primary");
	// 	});
	// });
	</script>
</body>

</html>