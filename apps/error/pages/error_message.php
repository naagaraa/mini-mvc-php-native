<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404 Not Found</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Kanit:200" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= ASSET . '/admin'; ?>/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= ASSET . '/admin'; ?>/img/favicon.png">
	<link href=<?= ASSET . "/css/style.min.css" ?> rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" /> -->
	<title>Document</title>
	<style>
		body{
			background-color: whitesmoke;
		}
		.color-white{
			color:white;
		}
		.color-black{
			color:black;
		}
	</style>
</head>

<body>
	<div class="container">
		<h2 class="mt-5" style="color:rgb(255, 81, 0)" >MINI MVC PHP NATIVE</h2>
		<p class="small">oke, nih sudah gue coba buat error hanlingnya untuk routes, controller dan view dengan try and catch Exception</p>	
		<div class="row">
			<div class="col">
				<h5 class="mt-5 mb-3">Error Handling </h5>
				<ul class="list-group">
					<li class="list-group-item list-group-item-success">Routing : <?= $data['route'] ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;    Not Found </li>
					<li class="list-group-item list-group-item-warning">Message : <?= $data['message'] ?></li>
					<li class="list-group-item list-group-item-primary">File : <?= $data['file'] ?></li>
					<li class="list-group-item list-group-item-danger">Core Line  : <?= $data['line'] ?></li>
					<li class="list-group-item list-group-item-primary">Line : <?= $data['line'] ?></li>
				</ul>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-lg-3">
				<h5 class="mt-5 mb-3">&nbsp;</h5>
				<div class="card bg-primary color-white">
					<div class="card-body">
						<h5 class="card-title">Semangat dari Gue</h5>
						<p class="card-text">Semangat ngodingnya bro hahaha, jangan lupa istirahat, sama selalu jaga kesehatan dan makan 3x sehari</p>
						<span class="small" >masih ada yang error, kacau lo :v</span>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="row">
					<div class="col">
						<h5 class="mt-5 mb-3">Trace code : <span class="badge bg-danger rounded-pill"><?= $data['total'] ?></span></h5>
						<ul class="list-group">
						<?php $i=1; foreach($data['trace'] as $val):?>
							<li class="list-group-item list-group-item-danger"><?= $i++ . ' : ' . $val ?></li>
						<?php endforeach;?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>