<?php
    include_once("blogctrl.php");
    if(!isset($_GET['act'])){
?>
<link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
<a href="?modul=blog&act=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
<table class="table table-bordered">
	<tr>
		<th>ID blog</th>
		<th>judul</th>
		<th>kategori</th>
		<th>isi</th>
		<th>author</th>
		<th>date input</th>
		<th>Action</th>
	</tr>
	<?php
	$qry_listmenu = mysqli_query($connect_db,"select * from mst_blog")
			or die("gagal akses table mst_blog ".mysqli_error($connect_db));
	while($row = mysqli_fetch_array($qry_listmenu)){
		$idk=$row['id_kategori'];
		$k1=mysqli_query($connect_db,"SELECT nm_kategori FROM mst_kategoriblog WHERE id_kategori='$idk'");
		if($kat=mysqli_fetch_array($k1)){		
	?>
	<tr>
		<td><?= $row['id_blog']; ?></td>
		<td><?= $row['judul']; ?></td>
		<td><?= $kat['nm_kategori']; ?></td>
		<td><?= $row['isi']; ?></td>
		<td><?= $row['author']; ?></td>
		<td><?= $row['date_input']; ?></td>
		<td>
			<a href="?modul=blog&act=edit&id=<?= $row['id_blog']; ?>" class="btn btn-xs btn-primary p-1"><i
					class="bi bi-pencil-square"></i>Edit</a>
			<a href="?modul=blog&act=delete&id=<?= $row['id_blog']; ?>" class="btn btn-xs btn-primary p-1">
				<i class="bi bi-trash"></i>Delete</a>
		</td>
	</tr>
	<?php
		}
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
	<form action="blog/blogctrl.php?modul=blog&act=save" method="post">
		<div class="row mb-1">
			<label for="" class="col-md-2">Nama Kategori</label>
			<div class="col-md-6">
				<select class="form-control" name="txt_kategori" id="txt_kategori">
					<option selected disabled>--pilih kategori--</option>
					<?php 
						$kateg=mysqli_query($connect_db,"SELECT * FROM mst_kategoriblog");
						while($k2=mysqli_fetch_array($kateg)){
					?>
					<option value="<?=$k2['id_kategori']; ?>"><?=$k2['nm_kategori']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row mb-1">
			<div class="col-md-2">
				<label for="" class="form-label">judul</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="txt_judul" id="txt_judul" class="form-control">
			</div>
		</div>
		<div class="row mb-1">
			<div class="col-md-2">
				<label for="" class="form-label">isi</label>
			</div>
			<div class="col-md-6">
				<textarea name="txt_isi" id="txt_isi" class="form-control" rows="10" cols="100"></textarea>
			</div>
		</div>
		<div class="row mb-1">
			<div class="col-md-2">
				<label for="" class="form-label">author</label>
			</div>
			<div class="col-md-6">
				<select name="author" id="author" class="form-control">
					<option selected disabled>--pilih author--</option>
					<?php 
					$auth=mysqli_query($connect_db,"SELECT * FROM mst_user");
					while($auth1=mysqli_fetch_array($auth)){
					?>
					<option value="<?=$auth1['id_user']; ?>"><?=$auth1['username']; ?></option>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="row mb-1">
			<div class="col-md-2">
				<label for="" class="form-label">date input</label>
			</div>
			<div class="col-md-6">
				<input type="date" name="date_input" id="date_input" class="form-control">
			</div>
		</div>
		<div class="row mb-1">
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
	<form action="blog/blogctrl.php?modul=blog&act=update" method="post">
		<div class="row mb-1">
			<label for="" class="col-md-2">Nama Kategori</label>
			<div class="col-md-6">
				<select class="form-control" name="txt_kategori" id="txt_kategori">
					<option selected disabled>--pilih kategori--</option>
					<?php 
						$kateg=mysqli_query($connect_db,"SELECT * FROM mst_kategoriblog");
						while($k2=mysqli_fetch_array($kateg)){
					?>
					<option value="<?=$k2['id_kategori']; ?>"><?=$k2['nm_kategori']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row mb-1">
			<div class="col-md-2">
				<label for="" class="form-label">judul</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="txt_judul" id="txt_judul" class="form-control">
			</div>
		</div>
		<div class="row mb-1">
			<div class="col-md-2">
				<label for="" class="form-label">isi</label>
			</div>
			<div class="col-md-6">
				<textarea name="txt_isi" id="txt_isi" class="form-control" rows="10" cols="100"></textarea>
			</div>
		</div>
		<div class="row mb-1">
			<div class="col-md-2">
				<label for="" class="form-label">author</label>
			</div>
			<div class="col-md-6">
				<select name="author" id="author" class="form-control">
					<option selected disabled>--pilih author--</option>
					<?php 
					$auth=mysqli_query($connect_db,"SELECT * FROM mst_user");
					while($auth1=mysqli_fetch_array($auth)){
					?>
					<option value="<?=$auth1['id_user']; ?>"><?=$auth1['username']; ?></option>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="row mb-1">
			<div class="col-md-2">
				<label for="" class="form-label">date input</label>
			</div>
			<div class="col-md-6">
				<input type="date" name="date_input" id="date_input" class="form-control">
			</div>
		</div>
		<div class="row mb-1">
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