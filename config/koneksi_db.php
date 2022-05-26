<?php
$servername = "localhost";//127.0.0.1
$database = "dblatihan1";
$user_db = "root";
$pass_db = "";

$connect_db = mysqli_connect($servername, $user_db, $pass_db, $database);
if(!$connect_db){
	echo "<h3>koneksi gagal!! </h3>";
	exit;
}
//set database
mysqli_select_db($connect_db, $database);

?>