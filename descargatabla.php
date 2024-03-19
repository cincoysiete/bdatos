<?php
include("identifica.php"); 
include("variables.php"); 
include("constantes.php");

$pede="";
$file = file($mibase.".csv");
foreach ($file as $line) {

$peder="";
$kakado=explode(";",$line);
for ($f=1;$f<=count($col);$f++){
$peder=$peder.utf8_decode($kakado[$f]).";";
}
$line=$peder;

$pede=$pede.$line;
$pede = substr($pede, 0, -2);
$pede=$pede.PHP_EOL;

}

$labase=explode("/",$mibase);

$pea=str_replace(".",",",$pede);
$arx=fopen("base_".$labase[1].".csv","w") or die("Problemas en la creacion ");
fputs($arx,$pea);
fclose($arx);

header("Content-disposition: attachment; filename="."base_".$labase[1].".csv");
header("Content-type: application/csv");
readfile("base_".$labase[1].".csv");

?>

