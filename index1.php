<?php
session_start();
if (isset($_SESSION["login"])) {
	header("Location: core/main.php");
	exit;
}

require 'core/function.php';

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			$_SESSION["login"] = true;


			header("Location:core/main.php");
			exit;
		}
	}
}

$error =  true;

?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Bear Brand</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="style/awal.css" type="text/css">
</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="box-form">
		<div class="left">

			<div class="overlay">
				<h1>Bear Brand.</h1>
				<p>“Bear Brand Rasakan Kemurnian!”</p>
			</div>
		</div>

		<div class="right">
			<h5>Login</h5>
			<div class="inputs">
				<form action="" method="post" class="form_input">
					<div class="username">
						<input type="text" name="username" placeholder="User Name" required="">
					</div>
					<br>
					<div class="password">
						<input type="password" name="password" placeholder="Password" required="">
					</div>
					<br>
					<br>
					<div class="button">
						<button type="submit" name="login"><span>Login</span></button>
					</div>
				</form>

			</div>

		</div>

	</div>

</body>

</html>