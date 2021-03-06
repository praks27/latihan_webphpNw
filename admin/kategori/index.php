<?php
    include_once("kategorictrl.php");
    if(!isset($_GET['act'])){
?>
<link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
<a href="?modul=kategori&act=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
<table class="table table-bordered">
	<tr>
		<th>ID kategori</th>
		<th>Nama Kategori</th>
		<th>is Active</th>
		<th>Action</th>
	</tr>
	<?php
	$qry_listmenu = mysqli_query($connect_db,"select * from mst_kategoriblog order by id_kategori ASC")
			or die("gagal akses table mst_kategoriblog ".mysqli_error($connect_db));
	while($row = mysqli_fetch_array($qry_listmenu)){		
	?>
	<tr>
		<td><?php echo $row['id_kategori']; ?></td>
		<td><?= $row['nm_kategori']; ?></td>
		<td><?= $row['is_active']; ?></td>
		<td>
			<a href="?modul=kategori&act=edit&id=<?= $row['id_kategori']; ?>" class="btn btn-xs btn-primary p-1"><i
					class="bi bi-pencil-square"></i>Edit</a>
			<a href="?modul=kategori&act=delete&id=<?= $row['id_kategori']; ?>" class="btn btn-xs btn-primary p-1">
				<i class="bi bi-trash"></i>Delete</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
<?php 
} //ini penutup if(!isset($_GET['act']))
else if(isset($_GET['act']) && ($_GET['act']== "add")){
//ketika di add
?>
<div class="container-fluid">
	<h3><?php echo $judul; ?></h3>
	<form action="kategori/kategorictrl.php?modul=kategori&act=save" method="post">
		<div class="row mb-1">
			<label for="" class="col-md-2">Nama Kategori</label>
			<div class="col-md-6">
				<input type="text" name="txt_nmkategori" id="txt_nmkategori" class="form-control ">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<input type="checkbox" name="ck_aktif" id="ck_aktif"> Aktif
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
					<i class="bi bi-x-lg"></i> Batal</a></button>
				<button type="submit" name="btnsimpan" value="btnsimpan" class="btn btn-xs btn-primary p-1">
					<i class="bi bi-save"></i> Simpan</a></button>
			</div>
		</div>
	</form>
</div>
<?php 
 }
 else if(isset($_GET['act']) && ($_GET['act']== "edit")){
?>
<div class="container-fluid">
	<h3><?php echo $judul; ?></h3>
	<form action="kategori/kategorictrl.php?modul=kategori&act=update" method="post">
		<div class="row mb-1">
			<label for="" class="col-md-2">Nama Kategori</label>
			<div class="col-md-6">
				<input type="hidden" class="form-control" name="txt_idkategori" id="txt_idkategori"  value="<?=$data['id_kategori']; ?> ">
				<input type="text" name="txt_nmkategori" id="txt_nmkategori" class="form-control"
					value="<?php echo $data['nm_kategori']; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<input type="checkbox" name="ck_aktif" id="ck_aktif" <?= $check; ?>> Aktif
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
					<i class="bi bi-x-lg"></i> Batal</a></button>
				<button type="submit" name="btnsimpan" value="btnsimpan" class="btn btn-xs btn-primary p-1">
					<i class="bi bi-save"></i> Simpan</a></button>
			</div>
		</div>
	</form>
</div>
<?php } ?>