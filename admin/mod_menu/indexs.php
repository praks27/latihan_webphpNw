<a href="#" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
<table class="table table-bordered">
	<tr>
		<th>ID Menu</th>
		<th>Nama Menu</th>
		<th>Link</th>
		<th>Action</th>
	</tr>
	<?php
	//perulangan disini
	 
	?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>
			<a href="#" class="btn btn-xs btn-primary">
				<i class="bi bi-pencil-square"></i>Edit</a>
			<a href="#" class="btn btn-xs btn-primary">
				<i class="bi bi-trash"></i>Delete</a>
		</td>
	</tr>
	<?php  //penutup perulangan ?>
</table>

<div class="container-fluid">
	<form action="" method="post">
		<div class="row mb-1">
			<label for="" class="col-md-2">Nama Menu</label>
			<div class="col-md-6">
				<input type="text" name="txt_nmmenu" id="txt_nmmenu" class="form-control ">
			</div>
		</div>
		<div class="row">
			<label for="" class="col-md-2">Link</label>
			<div class="col-md-6">
				<input type="text" name="txt_link" id="txt_link" class="form-control ">
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
				<input type="checkbox" name="ck_aktif" id="ck_aktif"> Aktif
			</div>
		</div>
	</form>
</div>