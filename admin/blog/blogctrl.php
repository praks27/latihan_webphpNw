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
	$qdata = mysqli_query($connect_db,"select * from mst_kategoriblog where id_kategori=$idkey")
			or die(mysqli_error($connect_db));
	$data = mysqli_fetch_array($qdata);
	$aktif = $data['is_active']; //value dari tabel di kolom is_active
	if($aktif == 1){
		$check = "checked";
	} 
	else{
		$check = "";
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "save")){
	//jika ada send variabel act=save, ketika proses simpan(insert)
	$kategori = $_POST['txt_kategori'];
	$judul = $_POST['txt_judul'];
	$isi = $_POST['txt_isi'];
	$author = $_POST['author'];
	$date = $_POST['date_input'];
	//query untuk simpan
	$qinsert = mysqli_query($connect_db, 
			"INSERT into mst_blog (judul,id_kategori,isi,author,date_input) VALUES('$kategori','$judul','$isi','$author','$date')")
			or die ("gagal akses table ".mysqli_error($connect_db));
	if($qinsert){
		//ketik proses simpan berhasil
		header("Location:http://localhost/latihan_webphp1/latihan_webphpNw/admin/home.php?modul=blog");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "update")){
	//jika ada send variabel act=update, ketika proses simpan ubah data
	$up_idkategori = $_POST['txt_idkategori'];
	$up_namakategori = $_POST['txt_nmkategori'];
	if(isset($_POST['ck_aktif'])){
		$aktif = 1;
	}
	else{
		$aktif = 0;
	}
	//query untuk simpan
	$qinsert = mysqli_query($connect_db, 
			"UPDATE mst_kategoriblog SET nm_kategori='$up_namakategori', is_active=$aktif  WHERE id_kategori='$up_idkategori'")
			or die (mysqli_error($connect_db));
	if($qinsert){
		//ketik proses simpan update berhasil
		header("Location: http://localhost/latihan_webphp1/latihan_webphpNw/admin/home.php?modul=kategori");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "delete")){
	//jika ada send variabel act=edit, tampil form edit/ubah data
	$idkey = $_GET['id']; //dapat dari URL
	$qdelete = mysqli_query($connect_db,"DELETE from mst_blog where id_blog=$idkey")
				or die(mysqli_error($connect_db));
	if($qdelete){
		header("Location: http://localhost/latihan_webphp1/latihan_webphpNw/admin/home.php?modul=blog");
	}
}
?>