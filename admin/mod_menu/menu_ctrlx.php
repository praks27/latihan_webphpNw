<?php 
if(isset($_GET['act']) && ($_GET['act'] == "save" || $_GET['act'] == "update")){
	require_once("../../config/koneksi_db.php");
	require_once("../../config/config.php");
}
else{
	require_once("../config/koneksi_db.php");
	require_once("../config/config.php");
}

	if(isset($_GET['act']) && $_GET['act'] == "add"){
		//ketika di add
	}
	else if(isset($_GET['act']) && $_GET['act'] == "edit"){
		//ketika edit
		$idkey = $_GET['id'];
		$qry_menu = mysqli_query($connect_db, "select * from mst_menu WHERE idmenu=".$idkey."") 
					or die("gagal dapat data menu".mysqli_error($connect_db));
		$data = mysqli_fetch_array($qry_menu);
		if($data['is_active'] == 1){
			$checked = "checked='checked'";
		}
		else{
			$checked = "";
		}
	}
	if(isset($_GET['act']) && $_GET['act'] == "save"){
		if(isset($_POST['btnsimpan'])){
			$txt_nmmenu = $_POST['txt_nmmenu'];
			$txt_link =  $_POST['txt_link'];
			if(isset($_POST['ck_aktif']) && $_POST['ck_aktif'] == true){
				$active = 1;
			}else{
				$active = 0;
			}
			$savedata = mysqli_query($connect_db,
			"INSERT INTO mst_menu(nmmenu, link, is_active) VALUES('".$txt_nmmenu."', '".$txt_link."', ".$active.")")
			or die("Gagal Simpan ke Table Mst_Menu".mysqli_error($connect_db));

			if($savedata){
				header("Location: ".URL_ADMIN."?modul=mod_menu");
			}
		}
	}
	if(isset($_GET['act']) && $_GET['act'] == "update"){
		if(isset($_POST['btnsimpan'])){
			$txt_idmenu = $_POST['txt_idmenu'];
			$txt_nmmenu = $_POST['txt_nmmenu'];
			$txt_link =  $_POST['txt_link'];
			if(isset($_POST['ck_aktif']) && $_POST['ck_aktif'] == true){
				$active = 1;
			}else{
				$active = 0;
			}
			$savedata = mysqli_query($connect_db,
				"UPDATE mst_menu SET nmmenu='".$txt_nmmenu."', link= '".$txt_link."', is_active='".$active."' 
				WHERE idmenu='".$txt_idmenu."'")or die("Gagal Simpan ke Table Mst_Menu".mysqli_error($connect_db));

			if($savedata){
				header("Location: ".URL_ADMIN."?modul=mod_menu&act=edit&id=".$txt_idmenu."");
			}
		}
	}

?>