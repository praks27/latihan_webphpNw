<?php
    require_once  "config/config.php";
    require_once  "config/koneksi_db.php";

$email=$_POST['email'];
$nama=$_POST['nm_lengkap'];
$informasi=$_POST['blog'];
$ket=$_POST['ket'];

mysqli_query($connect_db,"INSERT INTO dataResponden (email,nm_lengkap,informasi,keterangan) VALUES ('$email','$nama','$informasi','$ket')");
header("Location: index.php");
?>
