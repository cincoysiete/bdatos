<?php include("identifica.php"); 
include("constantes.php"); 
 
// include("cincoysiete.css"); 


$kaka=explode(".",$_GET["mtk"]);
$keke=explode("/",$kaka[0]);

// copy("backup/".$keke[1].".php","bases/".$keke[1].".php");
// copy("backup/".$keke[1].".csv","bases/".$keke[1].".csv");

unlink("backup/".$keke[1].".php");
unlink("backup/".$keke[1].".csv");

header("location: eliminabase.php");

?>

