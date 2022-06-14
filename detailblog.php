<?php
    require_once "config/config.php";
    require_once "config/koneksi_db.php";
?>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Landing Page</title>
	<link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/style.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
	<style>
        /* *{
            padding:0 ;
            margin:0 ;
        } */
		.huruf1{
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			font-weight: 500;
			color: black;
		}
	</style>
</head>
<!-- tampil blog -->
	<section id="detailblog">
		<div class="container-fluid d-flex flex-column align-items-center p-2">
            <h1 class="text-primary text-opacity-100 pb-2">=== My Blog ===</h1>
			<?php
				$idblog=$_GET['id'];
				$tampilblog=mysqli_query($connect_db,"SELECT * FROM mst_blog WHERE id_blog=$idblog");
				    while($show=mysqli_fetch_array($tampilblog)){
                        $id=$show['id_kategori'];
                        $k1=mysqli_query($connect_db,"select nm_kategori from mst_kategoriblog where id_kategori=$id");
                            if($k2=mysqli_fetch_array($k1)){		
			?>
				<div class="row">        
					<div class="col-md-2"></div>
						<div class="col-md-8">		
                            <h4><?= $show['judul'];?><br></h4>
                                <span class="bi bi-calendar-date huruf1"> 
                                        <?=$show['date_input']; ?>
                                            Created By : <?=$show['author'];?>
                                        <b>#<?= $k2['nm_kategori'];?></b>
                                </span><hr>
								        <img src="assets/img/<?= $show['gambar'];?>" width="400px" class="img-responsive center-block d-block mx-auto">
							        <p class="text-center"><?= $show['isi'];?></p>
						        </div>
					        <div class="col-md-2"></div>
				        </div>
			    <?php 
                    }
                }
                ?>
		</div>
	</section>

    <script src="assets/bootstrap5/js/bootstrap.bundle.min.js"></script>