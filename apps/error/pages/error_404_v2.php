<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404 Not Found</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= ASSET . '/admin'; ?>/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= ASSET . '/admin'; ?>/img/favicon.png">
	<title>Document</title>
	<style>
	*{-webkit-box-sizing:border-box;box-sizing:border-box}body{padding:0;margin:0}#notfound{position:relative;height:100vh}#notfound .notfound{position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.notfound{max-width:710px;width:100%;text-align:center;padding:0 15px;line-height:1.4}.notfound .notfound-404{height:200px;line-height:200px}.notfound .notfound-404 h1{font-family:'Fredoka One',cursive;font-size:168px;margin:0;color:#000;text-transform:uppercase}.notfound h2{font-family:'Raleway',sans-serif;font-size:22px;font-weight:400;text-transform:uppercase;color:#222;margin:0}.notfound-search{position:relative;padding-right:123px;max-width:420px;width:100%;margin:30px auto 22px}.notfound-search input{font-family:'Raleway',sans-serif;width:100%;height:40px;padding:3px 15px;color:#222;font-size:18px;background:#f8fafb;border:1px solid rgba(34,34,34,.2);border-radius:3px}.notfound-search button{font-family:'Raleway',sans-serif;position:absolute;right:0;top:0;width:120px;height:40px;text-align:center;border:none;background:#ff508e;cursor:pointer;padding:0;color:#fff;font-weight:700;font-size:18px;border-radius:3px}.notfound a{font-family:'Raleway',sans-serif;display:inline-block;font-weight:700;border-radius:15px;text-decoration:none;color:#39b1cb}.notfound a>.arrow{position:relative;top:-2px;border:solid #39b1cb;border-width:0 3px 3px 0;display:inline-block;padding:3px;-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}@media only screen and (max-width:767px){.notfound .notfound-404{height:122px;line-height:122px}.notfound .notfound-404 h1{font-size:122px}}
	</style>
</head>

<body>
	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
			</div>
			<h2>Oops, The Page you are looking for can't be found!</h2>
			<p class="error" style="font-weight:bold;font-size:large">Error Message : <?= $data['message']; ?></p>
			<br>
			<a href="<?= URL; ?>">Return To Homepage</a>
		</div>
	</div>

</body>

</html>