<?php include("identifica.php"); 
include("variables.php"); 
include("constantes.php");
 
include("cincoysiete.css"); 

if ($_SESSION["fichactual"]<$_SESSION["cuantosregistros"]){
$ero=fopen($mibase.".csv","r") or die("Error en base de datos");
for ($f=1;$f<=$_GET["qwer"];$f++) {
$linea=fgets($ero);
$keke=str_replace(";","~",$linea);
}
fclose($ero);
echo '<script>location.href="ver.php?modi=1&ficha='.trim($keke).'"</script>';
}

$ero=fopen($mibase.".csv","r") or die("Error en base de datos");
for ($f=1;$f<=$_SESSION["cuantosregistros"];$f++) {
$linea=fgets($ero);
$keke=str_replace(";","~",$linea);
}
fclose($ero);
echo '<script>location.href="ver.php?modi=1&ficha='.trim($keke).'"</script>';
?>

