<?php
$word = "saya sedang belajar php";
$word = explode(" ", $word);
var_dump($word); 
//array(4) 
//{ [0]=> string(4) "saya" [1]=> string(6) "sedang" 
//	[2]=> string(7) "belajar" [3]=> string(3) "php" }
echo $word[3]; //php
echo "<hr/>";
$im_words = implode("_", $word);
echo $im_words; // saya_sedang_belajar_php
echo "<hr/>";
$kata = "Ayo belajar web,mudah kok!!";
echo ltrim($kata, "Ayo"); //belajar web,mudah kok!!
echo "<hr/>";
$kata1 = "PHP mudah sekali";
echo rtrim($kata1, "sekali"); //PHP mudah
echo "<hr/>";
$kata2 = "Coding itu Fun";
$kata2 = str_replace(" ","",$kata2);
echo "jumlah karakter: ".strlen($kata2);
echo "<hr/>";
date_default_timezone_set('Asia/Jakarta');
$today = date("l, d-m-Y h:i:s");
echo "hari ini: ".$today; //hari ini: 01-04-2022
echo "<hr/>";
/*
$daftarTimezone = DateTimeZone::listIdentifiers();
foreach ($daftarTimezone as $timezone) {
  echo "{$timezone} <br>";
}
*/
function perkenalan($nama, $kampus = "LP3i"){
	echo "Hallo, nama saya : ".$nama.", kuliah di ".$kampus."<br>"; 
}
//cara memanggil function dan memberikan nilai parameter
perkenalan("Ani Nur");

function ceknilai($nilai){
	if($nilai >= 65){
		$ket = "Lulus";
	}
	else{
		$ket = "Ujian Kembali!";
	}
	return "Nilai Kamu: ".$nilai.", maka ".$ket;
}
$nama = "Ani Nur";
echo "Halloo ".$nama."<br>".ceknilai(75);
echo "<hr/>";

$tgllahir = date_create("02-12-1988");
$tglhariini = date("d-m-Y");
$umur = date_diff($tgllahir, date_create($tglhariini));
echo "umur= ".$umur->format('%y')." Tahun, ";
echo $umur->format('%m')." Bulan, ";
echo $umur->format('%a')."hari, ";
echo "<hr/>";
function ceksaldo($saldo, $akun){
	if($saldo >= 3000000){
		$thr = 0.1*$saldo;
	}
	else if($saldo >= 1000000){
		$thr = 0.2*$saldo;
	}
	else{
		$thr = 0;
	}
	return "THR: ".$thr." dari Saldo: ".$saldo." AC: ".$akun;
}
echo "Kamu Mendapatkan: ".ceksaldo(2000000, "ANi");
	



$tes = " aku";
echo $tes;
?>