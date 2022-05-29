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
	$qdata = mysqli_query($connect_db,"select * from mst_menu where idmenu=$idkey")
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
	$namamenu = $_POST['txt_nmmenu'];
	$link = $_POST['txt_link'];
	if(isset($_POST['ck_aktif'])){
		$aktif = 1;
	}
	else{
		$aktif = 0;
	}
	//query untuk simpan
	$qinsert = mysqli_query($connect_db, 
			"INSERT into mst_menu(nmmenu,link,is_active) VALUES('$namamenu','$link',$aktif)")
			or die (mysqli_error($connect_db));
	if($qinsert){
		//ketik proses simpan berhasil
		header("Location: http://localhost/latihan_webphp1/latihan_webphpNw/admin/home.php?modul=mod_menu");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "update")){
	//jika ada send variabel act=update, ketika proses simpan ubah data
	$idmenu = $_POST['txt_idmenu'];
	$namamenu = $_POST['txt_nmmenu'];
	$link = $_POST['txt_link'];
	if(isset($_POST['ck_aktif'])){
		$aktif = 1;
	}
	else{
		$aktif = 0;
	}
	//query untuk simpan
	$qinsert = mysqli_query($connect_db, 
			"UPDATE mst_menu SET nmmenu='$namamenu', link='$link', is_active=$aktif WHERE idmenu='$idmenu'")
			or die (mysqli_error($connect_db));
	if($qinsert){
		//ketik proses simpan update berhasil
		header("Location: http://localhost/latihan_webphp1/latihan_webphpNw/admin/home.php?modul=mod_menu");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "delete")){
	//jika ada send variabel act=edit, tampil form edit/ubah data
	$idkey = $_GET['id']; //dapat dari URL
	$qdelete = mysqli_query($connect_db,"DELETE from mst_menu where idmenu=$idkey")
				or die(mysqli_error($connect_db));
	if($qdelete){
		header("Location: http://localhost/latihan_webphp1/latihan_webphpNw/admin/home.php?modul=mod_menu");
	}
}
?>