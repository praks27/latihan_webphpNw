<?php 
require_once("config/koneksi_db.php"); 
require_once("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Landing Page</title>
	<link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/style.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>

<body>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<div class="container-fluid pe-5 ps-5">
			<a class="navbar-brand fw-bold" href="index.html">
				<h3>AniNur's Page</h3>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 fontnav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html#contactus">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="resume.html">Resume</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-people-fill"></i> Download</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li>
								<a class="dropdown-item" href="signin.html" target="_blank"> <i
										class="bi bi-file-text"></i> Materi HTML </a>
							</li>
							<li>
								<a class="dropdown-item" href="#"><i class="bi bi-code-square"></i> Materi CSS</a>
							</li>
							<li>
								<hr class="dropdown-divider" />
							</li>
							<li>
								<a class="dropdown-item" href="#"><i class="bi bi-bootstrap-reboot"></i> Materi
									Bootstrap</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- header -->
	<header class="bg-white">
		<div class="container-fluid d-flex justify-content-center align-items-center p-3">
			<span class="pe-2">
				<h3>Hello..</h3>
				<h1>I'am Web Designer</h1>
			</span>
			<span>
				<img src="assets/images/header.png" class="rounded-circle img-fluid img-thumbnail" width="500" />
			</span>
		</div>
	</header>

	<!-- About Me -->
	<section id="aboutme" class="bg-light">
		<div class="container-fluid d-flex flex-column align-items-center p-4">
			<h1 class="text-primary text-opacity-100 pb-3">=== About Me ===</h1>
			<!-- <span class=""
          >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique vel maiores eius! Voluptates qui mollitia facilis omnis eos natus vitae
          in, totam, numquam dicta officia minima consequuntur dolorum dolor cupiditate!</span
        > -->
			<div class="row pb-4 justify-content-center">
				<div class="col-2"></div>
				<div class="col-8 text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores a harum explicabo est? Aperiam
					dolore asperiores reiciendis debitis
					tempora optio itaque quam quasi dolorum aliquid? Quae natus perferendis atque laborum!
				</div>
				<div class="col-2"></div>
			</div>
		</div>
	</section>

	<!-- blog -->
	<section id="blog" class="bg-white">
		<div class="container-fluid d-flex flex-column align-items-center p-4">
			<h1 class="text-primary text-opacity-100 pb-3">=== My Blog ===</h1>
			<div class="row mb-4">
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<img src="assets/images/gambar1.jpg" width="270" class="img-fluid img-thumbnail" />
				</div>
				<div class="col-md-6">
					<h4>Judul Artikel-1</h4>
					<div>
						<span class="badge bg-info text-white rounded-3 fs-6">10/11/2011</span>
						<span class="text-primary fs-6">Created By : Aninur</span>
					</div>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores fugit quod cumque provident
						quasi! Ut minus veritatis sed atque, aut
						modi fugit? Veniam quos voluptatum harum cumque vero, numquam dolore! [ <a
							href="detailblog1.html">Baca Selengkapnya</a> ]
					</p>
					<hr />
				</div>
			</div>
			<div class="row mb-4">
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<img src="assets/images/gambar1.jpg" width="270" class="img-fluid img-thumbnail" />
				</div>
				<div class="col-md-6">
					<h4>Judul Artikel-2</h4>
					<div>
						<span class="badge bg-info text-white rounded-3 fs-6">10/11/2011</span>
						<span class="text-primary fs-6">Created By : Aninur</span>
					</div>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores fugit quod cumque provident
						quasi! Ut minus veritatis sed atque, aut
						modi fugit? Veniam quos voluptatum harum cumque vero, numquam dolore! [ <a
							href="detailblog2.html">Baca Selengkapnya</a> ]
					</p>
					<hr />
				</div>
			</div>
		</div>
	</section>
	<!-- contact us -->
	<section id="contactus" class="bg-light">
		<div class="container p-4">
			<h1 class="text-primary text-opacity-100 text-center pb-3">=== Contact Us ===</h1>
			<div class="row">
				<div class="col col-lg-2"></div>
				<div class="col col-lg-7">
					<form action="#">
						<div class="row mb-3">
							<label for="staticEmail" class="col-md-3 form-label">Email</label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="staticEmail" value="email@example.com" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="nama`" class="col-md-3 form-label">Nama Lengkap</label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="nama" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="info" class="col-md-3 form-label">Informasi</label>
							<div class="col-md-9">
								<select name="info" id="info" class="form-select">
									<option value="">Sharing Artikel</option>
									<option value="">Penawaran Kerja</option>
									<option value="">Lain-lain</option>
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<label for="ket" class="col-md-3 form-label">Keterangan</label>
							<div class="col-md-9">
								<textarea name="ket" id="ket" cols="30" rows="5" class="form-control"></textarea>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-9 text-center">
								<button class="btn btn-primary btn-sm"><i class="bi bi-envelope"></i> Simpan</button>
								<button class="btn btn-secondary btn-sm"><i class="bi bi-reply"></i> Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<footer class="bg-info bg-opacity-100">
		<div class="container-fluid d-flex justify-content-center text-white p-3">
			<span class="me-5 pe-5 fs-6">
				<address class="fw-bold">Head Office :</address>
				<p>Jalan Medan Merdeka Barat No. 9 Jakarta Pusat 10110 DKI Jakarta, Indonesia</p>
				<p>Telepon : 081-319301-010</p>
				<p>Emai : aninur.h@gmail.com</p>
			</span>
			<span class="ms-5">
				<address class="fw-bold">Social Media</address>
				<p>
					<a href="http://" target="_blank" rel="noopener noreferrer"><i
							class="bi bi-whatsapp iconsize"></i></a> Whatsapp
				</p>
				<p>
					<a href="http://" target="_blank" rel="noopener noreferrer"><i
							class="bi bi-instagram iconsize"></i></a> Instagram
				</p>
				<p>
					<a href="http://" target="_blank" rel="noopener noreferrer"><i
							class="bi bi-facebook iconsize"></i></a> Facebook
				</p>
			</span>
		</div>
	</footer>
	<!-- include file bootstrap js -->
	<script src="assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>

</html>