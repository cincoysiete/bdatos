<?php include("identifica.php"); 
 
include("constantes.php"); 
include("cincoysiete.css"); 

?>

<html lang="es">
<link rel="manifest" href="manifest.json">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" type="image/png" href="favicon.png" />
<meta charset="UTF-8">


<title><?php echo $nom; ?></title>

<style>
a:link {
	text-decoration: none;
color: #34484E;
}
a:visited {
	text-decoration: none;
color: #34484E;
}
a:hover {
	text-decoration: none;
color: #34484E;
}
a:active {
	text-decoration: none;
color: #34484E;
}
</style>

<?php


// MUESTRA LOS ARCHIVOS DE BASE DE DATOS
function listarArchivos($path,$cuantosarchivos,$archives){
    $dir = opendir($path);
    $cuenteo=0;
    while ($cuenteo < $cuantosarchivos){
      echo '<font size="3">';
      $kikio0=explode("/",$archives[$cuenteo]);
      $kikio1=explode(".",$kikio0[0]);

include("bases/".$kikio1[0].".php");

if ($come!="") {$micome='<br>'.'<i><font color="darkgray" size="2px">'.$come.'</font></i>';}
      echo '<a href="eliminalabase.php?mtk=bases/'.$archives[$cuenteo].'"  onclick="return confirmar();">'.$kikio1[0].$micome.'</a>';
      echo '<br><br>';
       $cuenteo++;
 }

}

function listarArchivosbk($path,$cuantosarchivos,$archives){
    $dir = opendir($path);
    $cuenteo=0;
    while ($cuenteo < $cuantosarchivos){
      echo '<font size="3">';
      $kikio0=explode("/",$archives[$cuenteo]);
      $kikio1=explode(".",$kikio0[0]);

include("backup/".$kikio1[0].".php");

if ($come!="") {$micome='<br>'.'<i><font color="darkgray" size="2px">'.$come.'</font></i>';}
      echo '<a href="borralabase.php?mtk=backup/'.$archives[$cuenteo].'" title="Eliminar la base de datos" onclick="return confirmar1();"><img src="eliminabase.png" width="20px"></a>   ';
      echo '<a href="recuperalabase.php?mtk=backup/'.$archives[$cuenteo].'" title="Recuperar la base de datos">'.$kikio1[0].$micome.'</a>';
      echo '<br><br>';
       $cuenteo++;
 }

}

// MUESTRA LAS BASES
$cuantosarchivos=0;
$archives[]="";
$dir = opendir("bases");
  while ($elemento = readdir($dir)){
      if( $elemento != "." && $elemento != ".." && strpos($elemento,".csv")){
          if( is_dir("bases".$elemento) ){
          } else {
            $archives[$cuantosarchivos]=$elemento;
            $cuantosarchivos++;
          }
      }
  }

?>

<div class="contenedor33">
<br>
<table width='100%' border='0' bgcolor="red">
<tr><td align='left' width="10%">
<a href="abre.php"><img src="volver.png" width="30px"></a>
</td><td align='center'>
<?php echo "ENVIAR A PAPELERA"; ?>
</td><td align='right' width="10%">
</td></td></table>

<br>
<?php
listarArchivos( "bases",$cuantosarchivos,$archives ); 
?>


<br><br><br>
<table width='100%' border='0' bgcolor="GREEN">
<tr><td align='left' width="10%">
<a href="abre.php"><img src="volver.png" width="30px"></a>
</td><td align='center'>
<?php echo "PAPELERA";?>
</td><td align='right' width="10%">
</td></td></table>
<br>



<?php
// MUESTRA LAS BACKUP
$cuantosarchivos=0;
$archives[]="";
$dir = opendir("backup");
  while ($elemento = readdir($dir)){
      if( $elemento != "." && $elemento != ".." && strpos($elemento,".csv")){
          if( is_dir("backup".$elemento) ){
          } else {
            $archives[$cuantosarchivos]=$elemento;
            $cuantosarchivos++;
          }
      }
  }


listarArchivosbk( "backup",$cuantosarchivos,$archives ); 

?>


<script>
function confirmar()
{
	if(confirm('\nATENCIÓN. Vas a enviarla base a la PAPELERA. \n¿Deseas continuar? '))
		return true;
	else
		return false;
}

function confirmar1()
{
	if(confirm('\nATENCIÓN. Vas a ELIMINAR la base seleccionada. \n¿Deseas continuar? '))
		return true;
	else
		return false;
}
</script>
