

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="http://localhost/companyprofile/public/admin/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="http://localhost/companyprofile/public/admin/img/favicon.png">

		<title>Cetak Laporan</title>
		
		<style>
			p {
				font-size: 25px;
			}

			.hal-satu{
				border: 1px solid black;
			}
			.sub-header{
				font-weight: bold;
			}

			hr{
				height: 5px;
				width: 100px;
				margin-left: -2px;
				background-color: black;
			}
			.margin-gambar{
				margin-left: 15px;
			}

		</style>
  </head>
  <body onload="window.print();">
		<img class="margin-gambar" src="<?= BASE_URL . '/admin/img/Untitled-2.jpg'; ?>" alt="logo" class="img-thumbnail" width="300px">
		<h1 class="text-center mb-5 mt-5">Reporting Message</h1>	
		<div class="container">
		<div class="row">
			<div class="col">
				<p>Nama 		: <?= $data['cetakinfo']['nama']; ?></p>
				<p>Email		: <?= $data['cetakinfo']['email']; ?></p>
				<p>Subject	: <?= $data['cetakinfo']['subject']; ?></p>
				<p>Tanggal	: <?= $data['cetakinfo']['tanggal']; ?></p>
			</div>
		</div>
		<br><br>
		<div class="row mt-5 hal-satu">
			<div class="col">
				<p class="sub-header">Pesan :</p>
				<hr>
				<br>
				<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quam nulla est corrupti! Ab accusamus eveniet praesentium dolorum veniam quis debitis fugiat voluptate, distinctio sed commodi velit voluptas obcaecati temporibus.</p> -->
				<p><?=  $data['cetakinfo']['pesan'];?></p>
			</div>
			</div>
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>