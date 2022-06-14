<?php 
if(isset($_GET['act']) && ($_GET['act']=="update" || $_GET['act']== "save")){
	//ketika code ini, posisi ada d folder mod_menu>admin>config
	require_once "../../config/koneksi_db.php";
	require_once "../../config/config.php";		
}
else{
	//ketika code ini, posisi ada d folder admin>config
	require_once "../config/koneksi_db.php";
	require_once "../config/config.php";
}
security_login();


if(isset($_GET['act']) && ($_GET['act']== "add")){
	//jika ada send variabel act=add, tampil form input/tambah
	$judul = "Form Input Data";

}
else if(isset($_GET['act']) && ($_GET['act']== "edit")){
	//jika ada send variabel act=edit, tampil form edit/ubah data
	$judul = "Form Edit Data";
	$idkey = $_GET['id']; //dapat dari URL
	$qdata = mysqli_query($connect_db,"select * from mst_blog where id_blog=$idkey")
			or die(mysqli_error($connect_db));
	$data = mysqli_fetch_array($qdata);
}
else if(isset($_GET['act']) && ($_GET['act']== "save")){

	//jika ada send variabel act=save, ketika proses simpan(insert)
	$judul = $_POST['judul'];
	$kategori= $_POST['kategori'];
    $author=$_POST['author'];
    $isi=$_POST['isi'];
    $date=$_POST['date_input'];
	// $img=$_POST['upload'];
	 if(isset($_POST['btnsimpan'])){
		 $img=$_FILES['upload'];
		 $file=$img['name'];
		 $targetfol="../../assets/img/";
		 $targetfile=$targetfol.$img['name'];
		 $type_file=pathinfo($img['name'],PATHINFO_EXTENSION);
		 move_uploaded_file($img['tmp_name'],$targetfile);
		//  $is_upload=1;
		// 	if($img['size'] > 1000000){
		// 		$is_upload=0;
		// 		echo '<script>alert("ukuran file terlalu besar")</script>';
		// 	}
	 }

	//query untuk simpan
	$qinsert = mysqli_query($connect_db, 
			"INSERT into mst_blog(judul,id_kategori,author,isi,date_input,gambar) VALUES('$judul','$kategori','$author','$isi','$date','$file')")
			or die (mysqli_error($connect_db));
	if($qinsert){
		//ketik proses simpan berhasil
		header("Location: http://localhost/latihan_webphp1/latihan_webphpNw/admin/home.php?modul=blog");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "update")){
	//jika ada send variabel act=update, ketika proses simpan ubah data
	$id = $_POST['id_blog'];
	$up_judul = $_POST['up_judul'];
	$up_kategori = $_POST['up_kategori'];
    $up_isi=$_POST['isi'];
    $up_author=$_POST['up_author'];
    $up_date=$_POST['date_input'];
	$upgmbr=$data['gambar'];

		if(isset($_POST['btnsimpan'])){
			$upimg=$_FILES['upload'];
			$upfile=$upimg['name'];
			$uptargetfol="../../assets/img/";
			$uptargetfile=$uptargetfol.$upimg['name'];
			move_uploaded_file($upimg['tmp_name'],$uptargetfile);
			
	}

	//query untuk simpan
	$qinsert = mysqli_query($connect_db, 
			"UPDATE mst_blog SET judul='$up_judul', id_kategori='$up_kategori', isi='$up_isi',author='$up_author',date_input='$up_date',gambar='$upfile 'WHERE id_blog='$id'")
			or die (mysqli_error($connect_db));
	if($qinsert){
		//ketik proses simpan update berhasil
		header("Location: http://localhost/latihan_webphp1/latihan_webphpNw/admin/home.php?modul=blog");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "delete")){
	//jika ada send variabel act=edit, tampil form edit/ubah data
	$idkey = $_GET['id']; //dapat dari URL
	$image1=mysqli_query($connect_db,"select  * from mst_blog where id_blog=$idkey");
	$row1=mysqli_fetch_array($image1);
	 $image=$row1['gambar'];		
		unlink("../../assets/img/".$image);
	$qdelete = mysqli_query($connect_db,"DELETE from mst_blog where id_blog=$idkey")
				or die(mysqli_error($connect_db));
	 
	if($qdelete){
		header("Location: http://localhost/latihan_webphp1/latihan_webphpNw/admin/home.php?modul=blog");
	}
}
?>
