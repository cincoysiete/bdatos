<?php include("identifica.php"); 
include("constantes.php"); 
include("encriptado.php"); 
include("cincoysiete.css"); 


$linea=PHP_EOL;
$linea.='$mibase="'.'bases/'.$_POST["nombre"].'";'.PHP_EOL;
$linea.='$deci="'.$_POST["decimales"].'";'.PHP_EOL;
$linea.='$come="'.$_POST["comen"].'";'.PHP_EOL.PHP_EOL;

for ($f=1;$f<=$numcampos;$f++){
if ($_POST["nom".$f]!=""){
$linea.='$col['.$f.']="'.$_POST["nom$f"].'";'.PHP_EOL;
$linea.='$tip['.$f.']="'.$_POST["tipo$f"].'";'.PHP_EOL;
$linea.='$sum['.$f.']="'.$_POST["suma$f"].'";'.PHP_EOL;
$linea.='$med['.$f.']="'.$_POST["media$f"].'";'.PHP_EOL;
}
$linea.=PHP_EOL;
}

// GUARDA EL ARCHIVO variables.php QUE CONTIENE LOS DETALLES DE LA TABLA
$nuevabase='<?php'.PHP_EOL.$linea.PHP_EOL.'?>';

$arx=fopen("bases/".$_POST["nombre"].".php","w") or die("Problemas en la creacion ");
fputs($arx,$nuevabase);
fclose($arx);

// AÑADE ; EN CASO DE SER NECESARIO
$ero=fopen('bases/'.$_POST["nombre"].".csv","r") or die("Error en base de datos");
while (!feof($ero)) 
{
$linea=fgets($ero);

$pei=explode(";",$linea);
$et=21-count($pei);
if ($et>2 and strlen($linea>1)) {for ($rt=1;$rt<=$et;$rt++) {$linea=rtrim($linea).";";}}

if ($linea!=";;") {$koko=$koko.$linea;}
$contando++;
}
fclose($ero);
$arx=fopen('bases/'.$_POST["nombre"].".csv","w") or die("Problemas en la creacion ");
fputs($arx,$koko);
fclose($arx);



// SI HEMOS CAMBIADO EL NOMBRE DE LA BASE DE DATOS ACTUALIZA LOS ARCHIVOS PHP Y CSV
if ($_SESSION["nombrebase"]!=$_POST["nombre"]){
    $kake=explode(".",$_SESSION["nombrebase"]);
    $nuevabase=$kake[0].".csv";
    copy("bases/".$nuevabase,"bases/".$_POST["nombre"].".csv");

    unlink("bases/".$nuevabase);
    $kake=explode(".",$nuevabase);
    $labase=$kake[0].".php";
    unlink("bases/".$labase);
}


?>
<script>window.history.go(-3)</script>