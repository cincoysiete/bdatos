<?php

// AÑADE ; EN CASO DE SER NECESARIO
$ero=fopen('bases/'.$_GET["nombre"].".csv","r") or die("Error en base de datos");
while (!feof($ero)) 
{
$linea=fgets($ero);

$pei=explode(";",$linea);
$et=21-count($pei);
if ($et>2 and strlen($linea>1)) {for ($rt=1;$rt<=$et;$rt++) {$linea=rtrim($linea).";";}}

if ($linea!=";;") {$koko=$koko.$linea;}
$contando++;

echo $linea;
echo "<br>";

}
fclose($ero);
$arx=fopen('bases/'.$_GET["nombre"].".csv","w") or die("Problemas en la creacion ");
fputs($arx,$koko);
fclose($arx);




?>

