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
	<link rel="apple-touch-icon" sizes="180x180" href="<?= asset('image/ico') ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= asset('image/ico') ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= asset('image/ico') ?>/favicon-16x16.png">
	<link rel="manifest" href="<?= asset() ?>site.webmanifest">

	<!-- style sheet -->
	<link rel="stylesheet" href="<?= asset('css/style.min.css') ?>">
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
		pre{
			white-space: initial;
		}

		.source-code{
			height: 20rem;
			overflow-y: scroll;
		}
	</style>
</head>

<body>
	<div class="container">
		<h2 class="mt-5" style="color:rgb(255, 81, 0)" >MINI MVC PHP NATIVE</h2>
		<p class="small">error handlingnya untuk routes, controller dan view dengan try and catch Exception untuk lebih mudah easy dalam debugging</p>	
		<div class="row">
			<div class="col">
				<h5 class="mt-5 mb-3">Error Handling </h5>
				<ul class="list-group">
					<li class="list-group-item list-group-item-success">Routing : <?= $data['route'] ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;     </li>
					<li class="list-group-item list-group-item-warning">Message : <?= $data['message'] ?></li>
					<li class="list-group-item list-group-item-primary">File : <?= $data['file'] ?></li>
					<li class="list-group-item list-group-item-danger">Core Line  : <?= $data['line'] ?></li>
					<li class="list-group-item list-group-item-primary">Line : <?= $data['line'] ?></li>
				</ul>
			</div>
		</div>
		<div class="row mt-5">
		<h5 class="card-title">View Source : <?= $data['file'] ?> <span class="badge bg-danger rounded-pill"><?= $data['line'] ?></span></h5></h5>
			<div class="col mt-2">
				<div class="source-code">
					<pre>
						<ul class="list-group" type="none">
						<?php $all_lines = file($data['file']); ?>
							<?php foreach ($all_lines as $line_num => $line): ?>
								<?php #hightlight code error by line ?>
								<?php if( $line_num+1 == $data['line'] ): ?>
									<li class="list-group-item list-group-item-danger" >&#10;  <?php echo $line_num +1 ?> <span class="ms-2 ps-2"> <?php echo htmlspecialchars($line, ENT_QUOTES, "UTF-8", TRUE) ?></span> </li>
								<?php else :?>
									<li class="list-group-item list-group-item-primary" >&#10;  <?php echo $line_num +1 ?> <span class="ms-2 ps-2"> <?php echo htmlspecialchars($line, ENT_QUOTES, "UTF-8", TRUE) ?></span> </li>
								<?php endif; ?>

							<?php endforeach;?>
						</ul>
					</pre>
				</div>
				
			</div>
		</div>

		<div class="row mb-5">
			<div class="col-lg-3">
				<h5 class="mt-5 mb-3">&nbsp;</h5>
				<div class="card bg-primary color-white">
					<div class="card-body">
						<h5 class="card-title">Message form Author</h5>
						<p class="card-text">Semangat ngodingnya bro hahaha, jangan lupa istirahat, sama selalu jaga kesehatan dan makan 3x sehari</p>
						<p class="card-text">Tips belajar programing dari gue adalah belajar sabar dan rajib baca setiap ada yang error, fahami errornya dan line of codenya juga</p>
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

	<footer class="container text-center my-4">
		<p>Copyright &copy; 2018-<?= year_now() ?> Backend By miyuki nagara</p>
	</footer>

</body>

</html>