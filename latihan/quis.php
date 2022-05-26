<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php 
	$angka = 9;
	$poin = 3;
	
	$hasil = $angka ** $poin; 
	echo "hasilnya = ".$hasil;
	echo '<hr>';
	?>
	<?php 
		$nilai = 85.5;
		if($nilai >= 85){
			echo 'nilai ok';
		}
		else{
			echo "belajar lagi";
		}		

		switch($nilai){
			case $nilai>= 85:
				echo 'nilai ok';
				break;
			default:
				echo 'belajar lagi';
				break;	
		}

		for($i=1; $i<=20;$i++){
			if($i%2==0){
				echo $i.",";
			}
		}
		echo "<hr>";
		function cekpeminjam($nama, $lama, $barang="buku"){
			echo $nama.", meminjam: ".$barang." selama: ".$lama."Hari";
			$batas = 7;
			if($lama > 7){
				echo " (Anda Kena Denda Rp.20,000)";
			}
			
		}
		cekpeminjam("Ani", 8, "Kamus ");
	?>
</body>

</html>