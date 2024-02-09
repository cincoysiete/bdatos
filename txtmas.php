<?php session_start(); 
include("variables.php"); 
include("constantes.php");
 
include("cincoysiete.css"); 

if ($_SESSION["tamtxt"]<16){$_SESSION["tamtxt"]++; $_SESSION["tamtxt"]++;}
if ($_SESSION["tamtxt"]>=16){$_SESSION["tamtxt"]=8;}


echo '<script>location.href="tabla.php"</script>';
?>

