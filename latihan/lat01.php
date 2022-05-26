<?php
echo "aku mencoba";
$nilai = array(60,70,80,75,90);
sort($nilai);
var_dump($nilai);
echo "<br>".$nilai[2]."<br>";
$dtmhs = array("dina"=>80, "sinta"=>90, "nia"=>85);
var_dump($dtmhs);
echo "<br>";
asort($dtmhs);
var_dump($dtmhs);

$x = 0;
while($x <= 10){
	if($x > 1 && $x <= 7){
		echo $x.",";
	}
	$x++;
}
?>