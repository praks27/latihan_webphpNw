<?php
for($i = 0; $i <= 10; $i+=2){
	//tuliskan blok kode yang akan diulang disini
	echo $i.", ";
}
echo '<hr/>';
$a = 0;
while($a <= 10){
	//tuliskan blok kode yang akan diulang disini
	echo $a.", "; 
	$a++;
}
echo '<hr/>';
$b = 0;
do{
	echo $b.", "; 
	$b+=2;
}while($b <= 10);

echo '<hr/>';
$mhs = array("putra","ardi","galang","adit","sulthan","agung");
foreach($mhs as $m){
	echo $m." ,";
}
echo "<br>".$mhs[1];

$coding = array("php", "js", ".net", "java");
//key berupa angka
$bhs_program = array(2=>"php", 5=>"js", 7=>".net");
echo "<br>".$bhs_program[5]; // js
//key berupa string
echo "<br>";
$bhs_programs = array("code1"=>"php", "code2"=>"js", "code3"=>".net");
asort($bhs_programs);
var_dump($bhs_programs);
echo "<br>hasilnya: ".$bhs_programs["code1"]."<br/>"; //php

$Mahasiswa = array(
	array("nama" =>"Dina", "quis"=>90, "tugas"=>85),
	array("nama" =>"Maria", "quis"=>75, "tugas"=>80)
);
echo $Mahasiswa[1]["nama"]." nilai tugas ".$Mahasiswa[1]["tugas"];


?>