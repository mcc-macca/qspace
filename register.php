<?php 
require 'php/funzioni.php';
$data = leggiFileJson("https://taiyoshitsu.altervista.org/api/mcls/mcls.json");
$nome = $data['qspace'][0]['name'];
$versione = $data['qspace'][0]['version'];
$footer_mcls = "Powered by $nome - $versione";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register | qspace</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="loginform">
		<!--------------TESTO QSPACE CORPORATION------------------>
		<div class="ltldiv">
			<div id="immagine">
				<center>
					<p style="font-size: 72px;"><img src="qspace.png" width="400px" title="qspace" /><br>
						<b>ACCOUNT</b>
					</p>
				</center>
			</div>
		</div>

		<!--------------------INPUT FIELDS------------------------>
		<div class="ltldiv">
			<div class="form">
				<center>
					<h1>REGISTER</h1>
				</center>
				<br>

				<form method="post" action="php/register.php">
				<p>Username:</p>
				<input class="infi" type="text" placeholder="ID">
				<br>
				<p>Password:</p>
				<input class="infi" type="password" placeholder="Password">
				<br><br>
				<center>
				<a href="index.php"><input type="button" class="inline" value="Login" id="register"></a>
				<input type="submit" class="inline" value="Register" id="login">
				<center><h4><?=$footer_mcls?></h4></center>
				</center>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
