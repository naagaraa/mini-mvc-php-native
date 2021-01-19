<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MINI MVC PHP NATIVE </title>

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
	.theme {
		background-color: rgb(237, 237, 237);
		color: rgb(255, 81, 0);
		font-size: medium;
		font-family: 'Nunito', sans-serif;
		font-weight: bold;
		height: 100vh;
		margin: 0;
	}

	.color-orange {
		background-color: rgb(255, 81, 0);
		color: white;
	}

	.color-orange:hover {
		background-color: rgb(196, 69, 10);
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
		color: gray;
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
		margin: auto;
	}
	</style>
</head>

<body id="my-theme" class="theme">
	<div class="flex-center position-ref full-height">
		<div class="content">
			<div class="title m-b-md">
				<div class="background">
					MINI MVC PHP NATIVE
				</div>
			</div>

			<div class="links">
				<a href="https://naagaraa.github.io/documentation-mini-mvc-php-project/" target="_blank">Documentation</a>
				<a href="https://github.com/naagaraa/mini-mvc-phpnative" target="_blank">GitHub</a>
			</div>
			<footer>
				<div class="container">
					<button id="theme" class="mt-4 btn color-orange">change theme</button>
				</div>
			</footer>
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