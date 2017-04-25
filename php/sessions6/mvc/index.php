<?php
//$c = isset($_GET["controller"])? $_GET["controller"] : "home"; 

if(isset($_GET["controller"])) {
	$c = $_GET["controller"];
} else {
	$c = "login";
}
if($c != 'login'){
	session_start();
	if(!isset($_SESSION['useremail']))
		Header("location: index.php?controller=login");
	//location.href = "/index.php?controller=login";
}
include "controllers/".$c."_controller.php"; 
$c = $c."_controller"; 
$controller = new $c(); 
?>