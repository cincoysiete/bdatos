<html lang="es">
<link rel="icon" type="image/png" href="<?php echo $log; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title><?php echo $nom; ?></title>

<?php
session_start(); 
include("variables.php"); 
include("constantes.php");
 
include("cincoysiete.css"); 
?>

<!-- MOSTRAMOS EL REGISTRO EN FORMATO FICHA-->
<!-- <div class="contenedor"> -->
<br>
<center>
<table width='86%' border='0' bgcolor="<?php echo $colo; ?>">
<tr><td align='left'>
 <a href="tabla.php"><img src="volver.png" width="30px"></a>     
</td><td align='left'>
<?php echo $_GET["colu"]; ?>
</td></td></table>
</center>
<br>


<form method="POST" action=""  enctype="multipart/form-data" style="max-width:80%;margin:auto">
<?php
if ($_GET["tip"]=="textarea"){
$kaka=str_replace("    ","<br>",$_GET["esto"]);
echo $kaka;
}

if ($_GET["tip"]=="image"){
    echo '<img src="'.$_GET["esto"].'" width="900px">';
}

?>


</form>

