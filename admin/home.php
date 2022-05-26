<?php
session_start();
require_once("../config/koneksi_db.php");
require_once("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css" />
</head>

<body>
	<!-- header -->
	<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
		<div class="container-fluid">
			<a class="navbar-brand text-white" href="#">LOGO Perusahaan</a>
			<?= $_SESSION['userlogin']; ?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="d-flex flex-row-reverse">
				<a href="logout.php">signOut</a>
			</div>
		</div>
	</nav>
	<!-- content -->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 p-3">
					<?php 
						include_once("menu.php");
					?>
				</div>
				<div class="col-lg-9 p-5">
					<!-- kolom untuk menampilkan konten -->
					<?php 
						if(isset($_GET['modul'])){
							//contoh $_GET['modul'] = mod_berita
							//include "mod_berita/index.php"
							include "".$_GET['modul']."/index.php"; 
							
						}
					
					?>
				</div>
			</div>
		</div>
	</section>
</body>

</html>