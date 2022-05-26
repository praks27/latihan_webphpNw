<?php
$databarang = array(
	array("kode"=>"B01", "nama"=>"Buku", "harga"=>50000),
	array("kode"=>"B02", "nama"=>"Pulpen", "harga"=>10000),
	array("kode"=>"B03", "nama"=>"Penghapus", "harga"=>5000)
);
	
foreach($databarang as $dtb){
	echo $dtb['kode'].", ".$dtb['nama'].", ".$dtb['harga'];
	echo "<br>";
}
?>