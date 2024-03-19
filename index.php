<?php 
include("identifica.php"); 
include("constantes.php");
// include("cincoysiete.css"); 

$_SESSION["movil"]="no";
include('Mobile_Detect.php');
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
	$_SESSION["movil"]="si";    
}

if($detect->isTablet()){
		$_SESSION["movil"]="no";
      }

$_SESSION["editar"]=-1;      // NO TE PERMITE MODIFICAR REGISTROS
if ($imgtabla=="si"){$_SESSION["verimagenes"]=1;} else {$_SESSION["verimagenes"]=-1;}

header("location: abre.php");
?>
