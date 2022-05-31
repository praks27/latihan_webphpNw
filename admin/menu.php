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
	/*
	$listmenu = array(
		array("id"=>"01", "nm_menu"=>"Dashboard", "link"=>"home.php"),
		array("id"=>"02", "nm_menu"=>"Blog", "link"=>"#"),
		array("id"=>"03", "nm_menu"=>"Berita", "link"=>"mod_berita"),
		array("id"=>"04", "nm_menu"=>"Setting Menu", "link"=>"mod_menu")
	);
	*/
	$qry_menu = mysqli_query($connect_db, "select * from mst_menu") or die("view menu".mysqli_error($connect_db));

	?>
	<ul class="list-group">
		<?php 
		//ini untuk looping hasil query dari table dengan fungsi mysqli_fetch_array($qry_menu,MYSQLI_NUM)
		//parameter array : MYSQLI_ASSOC atau MYSQLI_NUM
		while($row = mysqli_fetch_array($qry_menu)){ 
		?>
		<li class="list-group-item">
			<a href="?modul=<?= $row['link']; ?>" class="list-group-item list-group-item-action"><?= $row['nmmenu']; ?></a>
		</li>
		<?php } ?>
	</ul>
</body>

</html>