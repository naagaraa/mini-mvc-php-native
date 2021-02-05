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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Document</title>
	<style>
		body{
			background-color: whitesmoke;
		}
		.color-white{
			color:white;
		}
	</style>
</head>

<body>
	<div class="container">
		<h2 class="mt-5" style="color:rgb(255, 81, 0)" >MINI MVC PHP NATIVE</h2>
		<p class="small">oke, nih sudah gue coba buat error hanlingnya dengan try and catch Exception</p>	
		<div class="row">
			<div class="col">
				<h5 class="mt-5 mb-3">Error Handling </h5>
				<ul class="list-group">
					<li class="list-group-item list-group-item-warning">Message : <?= $data['message'] ?></li>
					<li class="list-group-item list-group-item-primary">File : <?= $data['file'] ?></li>
					<li class="list-group-item list-group-item-danger">Line : <?= $data['line'] ?></li>
				</ul>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-lg-3">
				<h5 class="mt-5 mb-3">&nbsp;</h5>
				<div class="card bg-primary color-white">
					<div class="card-body">
						<h5 class="card-title">Info</h5>
						<p class="card-text">Semangat ngodingnya bro wkwkwkwk, jangan lupa istirahat, sama selalu jaga kesehatan dan makan 3x sehari</p>
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