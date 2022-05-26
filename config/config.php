<?php 
date_default_timezone_set('Asia/Jakarta');
$set_url = "http://".$_SERVER['HTTP_HOST'];
$set_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$mainfolder = explode("/",$_SERVER['PHP_SELF']);
$mainurl = "http://".$_SERVER['HTTP_HOST']."/".$mainfolder[1]."/";
$mainurl_homeadmin = $mainurl."admin/home.php";


define("URL", $set_url);
define("MAIN_URL", $mainurl);
define("URL_ADMIN",$mainurl_homeadmin);


function security_login(){
    if(empty($_SESSION['userlogin'])){
        
        header("Location:index.php");
    }else{
        return " ";
    }
}
?>