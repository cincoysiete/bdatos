<?php 
session_start(); 
$_SESSION["gusuario"]="";
$_SESSION["gclave"]="";
$_SESSION["gusuario1"]="";
$_SESSION["gclave1"]="";
$_SESSION["sipasaZ"]=0;
$_SESSION["sipasoZ"]=0;
include("constantes.php");
$_SESSION["editar"]=-1;      // NO TE PERMITE MODIFICAR REGISTROS
if ($imgtabla=="si"){$_SESSION["verimagenes"]=1;} else {$_SESSION["verimagenes"]=-1;}

header("location: inicio.php");

?>
