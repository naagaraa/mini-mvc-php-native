<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="welcome message">
	<meta name="keywords" content="mini mvc php native project">
	<meta name="author" content="nagara">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php header('Content-type: text/html; charset=utf-8'); ?>

	<title>NAGARA/MINI MVC PHP NATIVE </title>

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= ASSET . '/image'; ?>/PHP-logo.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= ASSET . '/image'; ?>/PHP-logo.png">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Bootstrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!-- Styles -->
	<style>
	* {
		font-display: swap
	}

	.theme {
		/* background-color: rgb(237, 237, 237); */
		background-image: url('<?= asset('image/background.png') ?>');
		background-repeat: no-repeat;
		background-size: cover;
		/* background-position-y: -50px; */
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

	.links>a {
		color: #e1eaf9;
		font-weight: 600;
		letter-spacing: .1rem;
		text-decoration: none;
		padding-top: 20px;
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
		margin-top: 5rem;
	}

	.mr-20{
		margin-left: 5rem !important;
	}

	.m-b-md {
		margin-bottom: 30px;
	}

	.background h1 {
		font-weight: bold;
	}

	footer{
		margin-top: 10rem;
		display: relative !important;
		font-size: small;
		color: #7c7c7c;
		text-align: end;
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
			<div class="col-3">
				<ul type="none" class="links" >
					<a href="https://naagaraa.github.io/documentation-mini-mvc-php-project/" target="_blank" ><li>DOCUMENTATION</li></a>
					<a href="https://github.com/naagaraa/mini-mvc-phpnative" target="_blank"><li>GITHUB</li></a>
					<a href="https://www.youtube.com/channel/UCYsZhw6Mlk23Q-nUPP9t1YA" target="_blank"><li>YOUTUBE</li></a>
					<a href="https://www.instagram.com/naagaraa/" target="_blank"><li>INSTAGRAM</li></a>
					<a href="https://dribbble.com/naagaraa/" target="_blank"><li>DRIBBLE</li></a>
					<a href="<?= url('info') ?>" target="_blank"><li>PHP INFO</li></a>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
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
	$(document).ready(function() {
		$("#theme").click(function(e) {
			$("#my-theme").toggleClass("dark-theme");
			$(this).toggleClass("btn-primary");
		});
	});
	</script>
</body>

</html>