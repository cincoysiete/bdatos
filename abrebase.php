<?php session_start(); 
include("constantes.php"); 
 
$_SESSION["bascula"]=1;

$kaka=explode(".",$_GET["mtk"]);
copy($kaka[0].".php","variables.php");

header("location: tabla.php");

?>
