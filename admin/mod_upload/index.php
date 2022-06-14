<?php 
    include_once "uploadCtrl.php";
?>
<form action="mod_upload/uploadCtrl.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <input type="file" name="urlfile" id="urlfile" class="form-control">
        </div>
        <div class="col-md-2">
            <button type="submit" name="btnupload" id="urlfile" class="btn btn-primary">simpan</button>   
        </div>
    </div>
</form>