<?php 
	include_once "berita_ctrl.php";
?>
<?php 
if(!isset($_GET['action'])){
?>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Judul</th>
		<th>Konten</th>
		<th>Action</th>
	</tr>
	<?php 
		//tulis array disini
		//looping 
		foreach($listberita as $b){
		?>
	<tr>
		<td><?= $b["id"]; ?></td>
		<td><?= $b['judul']; ?></td>
		<td><?= $b['konten']; ?></td>
		<td>
			<a href="?modul=mod_berita&action=edit" class="btn btn-xs btn-primary">
				<i class="bi bi-pencil-square"></i>Edit</a>
			<a href="" class="btn btn-xs btn-primary">
				<i class="bi bi-trash"></i>Delete</a>
		</td>
	</tr>
	<?php } //penutup looping ?>
</table>
<?php }
else{
	echo "ediit";
} 
?>