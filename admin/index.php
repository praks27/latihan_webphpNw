<?php 
require_once("../config/koneksi_db.php"); 
require_once("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/style.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>

<body class="bg-light">
	<div class="container d-flex justify-content-center mt-5 pt-5">
		<form method="POST" action="ceklogin.php" class="bg-info bg-opacity-25 pt-2 ps-5 pe-5 pb-3 border-1">
			<div class="alert alert-danger" role="alert" id="alert" style="display: none"></div>
			<div class="alert alert-success" role="alert" id="alertok" style="display: none"></div>
			<div id="judul" class="mt-1"><b>Login Admin</b></div>
			<hr />
			<div class="mb-4">
				<label for="username" class="form-label">Username</label>
				<input type="text" name="username" class="form-control" id="username" />
			</div>
			<div class="mb-4">
				<label for="password" class="form-label">Password</label>
				<input type="password" name="password" class="form-control" id="password" />
			</div>
			<!-- <button type="submit" name="btnbatal" class="btn btn-primary">batal</button> -->
			<button type="submit" name="btnlogin" class="btn btn-primary">Login</button>

			<a href="../index.php" class="ps-5"><b>Home</b></a>
		</form>

	</div>
</body>

</html>