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
	<style>
		.huruf1{
			font-family: 'Courier New', Courier, monospace;
			font-weight: bold;
			color: black;
		}
		.huruf2{
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			font-weight: 600;
			color: black;
		}
		a{
			text-decoration: none;
		}
		a:hover{
			color: slateblue;
		}
		.logo1:hover{
			color: mediumspringgreen;
		}
		.logo2:hover{
			color: mediumblue;
		}
	</style>
</head>

<body>
<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#D3EBCD ;">
		<div class="container-fluid pe-5 ps-5">
				<h2 class="huruf1">GamingMaster Page</h2>
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
								<a class="dropdown-item" href="signin.html" target="_blank"><i
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
			<?php
					$qryblog=mysqli_query($connect_db,"select * from mst_blog");
					while($qblog=mysqli_fetch_array($qryblog)){ 
				?>
			<div class="row mb-4">
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<img src="assets/img/<?= $qblog['gambar'];?>" width="270" class="img-fluid img-thumbnail" />
				</div>
				<div class="col-md-6">
					<h4><?= $qblog['judul'];?></h4>
					<div>
						<span class="badge bg-info text-white rounded-3 fs-6"><?=$qblog['date_input']; ?></span>
						<span class="text-primary fs-6">Created By : <?=$qblog['author']; ?></span>
					</div>
					<p>
						<?=substr( $qblog['isi'],0,200);?>
						<a	href="detailblog.php?id=<?= $qblog['id_blog'];?>">Baca Selengkapnya</a> 
					</p>
					<hr />
				</div>
				<?php } ?>
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
					<form action="#" method="POST" id="formkores">
						<div class="row mb-3">
							<label for="staticEmail" class="col-md-3 form-label">Email</label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="email" value="email@example.com" name="email" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="nama`" class="col-md-3 form-label">Nama Lengkap</label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="nama" name="nm_lengkap"/>
							</div>
						</div>
						<div class="row mb-3">
							<label for="info" class="col-md-3 form-label">Informasi</label>
							<div class="col-md-9">
								<select name="blog" id="blog" class="form-select">
									<option selected disabled>-- pilih Blog --</option>
									<option value="Sharing Artikel">Sharing Artikel</option>
                                    <option value="Penawaran Kerja">Penawaran Kerja</option>
                                    <option value="Lain Lain">Lain-lain</option>
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
								<button type="button" class="btn btn-primary btn-sm" id="btnsimpan" data-bs-toggle="modal"><i class="bi bi-envelope" ></i> Simpan</button>
								<button type="cancel" class="btn btn-secondary btn-sm"><i class="bi bi-reply"></i> Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<!-- modal -->
<div class="modal" tabindex="-1"  id="konfirmasi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>apakah anda  yakin ingin menyimpan data ?
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnyes" >Save changes</button>
      </div>
    </div>
  </div>
</div>
	<!-- footer -->
	<footer style="background-color:#D3EBCD ; ">
		<div class="container-fluid d-flex justify-content-center text-white p-3">
			<span class="me-5 pe-5 fs-6 text-dark">
				<address class="fw-bold">Head Office :</address>
				<p>Jalan Medan Merdeka Barat No. 9 Jakarta Pusat 10110 DKI Jakarta, Indonesia</p>
				<p>Telepon : 0857-0809-9114</p>
				<p>Email : gamingmaster456798@gmail.com</p>
			</span>
			<span class="ms-5 text-dark">
				<address class="fw-bold">Social Media</address>
				<p>
					<a href="http://" target="_blank" rel="noopener noreferrer" class="huruf2 logo1"><i
							class="bi bi-whatsapp iconsize "></i> Whatsapp</a>
				</p>
				<p>
					<a href="http://" target="_blank" rel="noopener noreferrer" class="huruf2"><i
							class="bi bi-instagram iconsize"></i> Instagram</a> 
				</p>
				<p>
					<a href="http://" target="_blank" rel="noopener noreferrer" class="huruf2 logo2"><i
							class="bi bi-facebook iconsize"></i> Facebook</a> 
				</p>
			</span>
		</div>
	</footer>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="proses.js"></script>
	<!-- include file bootstrap js -->
	<script src="assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>

</html>