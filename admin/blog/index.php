	<?php 
include_once "blogCTRL.php";
if(!isset($_GET['act'])){
//jika tidak ditemukan pengiriman variabel "act"
?>	
<a href="?modul=blog&act=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
<table class="table table-bordered">
	<tr>
		<th>ID blog</th>
		<th>Judul</th>
		<th>Kategori</th>
		<th>isi</th>
		<th>author</th>
		<th>date input</th>
		<th>gambar</th>
		<th>action</th>
	</tr>
	<?php
	$qry_listmenu = mysqli_query($connect_db,"select * from mst_blog")
			or die("gagal akses table mst_blog ".mysqli_error($connect_db));
	while($row = mysqli_fetch_array($qry_listmenu)){
        $id=$row['id_kategori'];
        $k1=mysqli_query($connect_db,"select nm_kategori from mst_kategoriblog where id_kategori=$id");
        if($k2=mysqli_fetch_array($k1)){		
	?>
	    <tr>
		    <td><?= $row['id_blog']; ?></td>
		    <td><?= $row['judul']; ?></td>
		    <td><?= $k2['nm_kategori']; ?></td>
		    <td><?= $row['isi']; ?></td>
		    <td><?= $row['author']; ?></td>
		    <td><?= $row['date_input']; ?></td>
		    <td><img src="../assets/img/<?=$row['gambar'];?>" width="250px"></td>
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
	<form action="blog/blogCTRL.php?modul=blog&act=save" method="post" enctype="multipart/form-data">
		<div class="row mb-1">
			<label for="" class="col-md-2">judul</label>
			<div class="col-md-6">
                <input type="hidden" name="author" value="<?=$_SESSION['userlogin']; ?>">
				<input type="text" name="judul" id="judul" class="form-control ">
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-2">kategori</label>
			<div class="col-md-6">
				<select name="kategori" id="kategori" class="form-select">
                    <option selected disabled>-- pilih kategori --</option>
                    <?php
                    $kat=mysqli_query($connect_db,"select * from mst_kategoriblog");
                    while($kateg=mysqli_fetch_array($kat)){
                    ?>
                        <option value="<?=$kateg['id_kategori'];?>"><?=$kateg['nm_kategori']; ?></option>
                    <?php }?>
                </select>
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-2">Isi</label>
			<div class="col-md-6">
				<textarea name="isi" id="isi" class="form-control " rows="10" cols="100"></textarea>
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-2">date input</label>
			<div class="col-md-6">
				<input type="date" name="date_input" id="date_input" class="form-control ">
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-2">Upload Gambar</label>
			<div class="col-md-6">
				<input type="file" name="upload" id="upload" class="form-control">
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
	<form action="blog/blogCTRL.php?modul=blog&act=update" method="post" enctype="multipart/form-data">
		<div class="row mb-1">
			<label for="" class="col-md-2">judul</label>
			<div class="col-md-6">
				<!-- input type hidden ini untuk menyimpan idmenu sebagai key untuk proses update data
				kenapa di hidden, karena field sbg primary key tidak boleh di edit -->
				<input type="hidden" name="id_blog" id="id_blog" class="form-control" value="<?= $data['id_blog']; ?>">
				<input type="text" name="up_judul" id="up_judul" class="form-control" value="<?= $data['judul']; ?>">
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-2">kategori</label>
			<div class="col-md-6">
				<select name="up_kategori" id="up_kategori" class="form-select">
                    <?php 
                    $kat1=mysqli_query($connect_db,"select * from mst_kategoriblog");
                    while($upkateg=mysqli_fetch_array($kat1)){
                        if($upkateg['id_kategori']===$data['id_kategori']){
                            $select = "selected";
                        } 
                        else{
                            $select = "";
                        }
                    ?>
                       <option value="<?=$upkateg['id_kategori']; ?>"<?= $select; ?>><?=$upkateg['nm_kategori']; ?></option> 
                    <?php } ?>
                </select>
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-2">isi</label>
			<div class="col-md-6">
				<textarea name="isi" id="isi" class="form-control" ><?= $data['isi']; ?></textarea>
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-2">author</label>
			<div class="col-md-6">
				<select name="up_author" id="up_author" class="form-select">
                    <?php 
                    $author1=mysqli_query($connect_db,"select username from mst_user");
                    while($auth=mysqli_fetch_array($author1)){
                        if($auth['username']===$data['author']){
                            $select="selected";
                        }else{
                            $select="";
                        }
                    ?>
                        <option value="<?= $auth['username'];?>"<?= $select; ?>><?= $auth['username']; ?></option>
                    <?php } ?>
                </select>
			</div>
		</div>
        <div class="row mb-1">
			<label for="" class="col-md-2">date input</label>
			<div class="col-md-6">
				<input type="date" name="date_input" id="date_input" class="form-control " value="<?= $data['date_input'] ?>">
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-2">Upload Gambar</label>
			<div class="col-md-6">
				<input type="file" name="upload" id="upload" class="form-control"><img src="../assets/img/<?= $data['gambar'];?>" width="240px">
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
<script type="text/javascript" src="../../assets/bootstrap5/js/bootstrap.bundle.min.js"></script>  
<?php } ?>