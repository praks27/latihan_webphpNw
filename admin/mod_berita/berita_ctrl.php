<?php
if(!isset($_GET['action'])){
	$listberita = array(
		array("id"=>"01", "judul"=>"Judul01", "konten"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		array("id"=>"02", "judul"=>"Judul02", "konten"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		array("id"=>"03", "judul"=>"Judul03", "konten"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit")
	);
}
else if(isset($_GET['action']) && $_GET['action']=="edit"){
	$query ="";
}

/*
$action = "select";
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch ($action){
	case "select":
		index();
		break;
	
}
function index(){
	$listberita = array(
		array("id"=>"01", "judul"=>"Judul01", "konten"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		array("id"=>"02", "judul"=>"Judul02", "konten"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		array("id"=>"03", "judul"=>"Judul03", "konten"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit")
	);
	return $listberita;
}
*/