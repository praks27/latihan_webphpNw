$("#btnsimpan").click(function() {
    let email=$('#email').val();
    if(email==""){
        alert("email wajib diisi!!");
    }else{
        $("#konfirmasi").modal("show");
    }
});
$("#btnyes").click(function() {
    console.log("test");
    $("#formkores").attr("action","contactProses.php");
    $("#formkores").submit();
});