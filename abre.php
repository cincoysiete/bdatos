<?php session_start(); 
include("constantes.php"); 
$_SESSION["tamtxt"]=12;
include("cincoysiete.css"); 

?>

<html lang="es">
<link rel="manifest" href="manifest.json">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" type="image/png" href="favicon.png" />
<?php //header('Content-Type: text/html; charset=UTF-8'); ?>


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
function listarArchivos($path, $cuantosarchivos, $archives) {
  $dir = opendir($path);
  $cuenteo = 0;
  
  // Ordenar el array $archives alfabéticamente
  sort($archives);

  while ($cuenteo < $cuantosarchivos) {
      echo '<font size="3">';
      $kikio0 = explode("/", $archives[$cuenteo]);
      $kikio1 = explode(".", $kikio0[0]);

      include("bases/".$kikio1[0].".php");

      if ($come != "") {
          $micome = '. '.'<i><font color="darkgray" size="2px">'.$come.'</font></i>';
      }
      if ($come == "") {
          $micome = "";
      }
      echo '<a href="abrebase.php?mtk=bases/'.$archives[$cuenteo].'">'.$kikio1[0].$micome.'</a>';
      echo '<br><br>';
      $cuenteo++;
  }
}

// MUESTRA LOS PEDIDOS
$cuantosarchivos = 0;
$archives = array();
$dir = opendir("bases");

while ($elemento = readdir($dir)) {
  if ($elemento != "." && $elemento != ".." && strpos($elemento, ".csv")) {
      if (!is_dir("bases".$elemento)) {
          $archives[$cuantosarchivos] = $elemento;
          $cuantosarchivos++;
      }
  }
}
?>

<div class="contenedor22">
<br>
<table width='100%' border='0' bgcolor="<?php echo $colo; ?>">
<tr><td align='left' width="10%">
<a href="salida.php"><img src="cerrar.png" width="30px"></a>
</td><td align='center'>
<?php echo $nom; ?>
</td><td align='right' width="10%">
<a href="eliminabase.php" title="Eliminar base de datos"><img src="eliminabase.png" width="30px"></a>
</td><td align='right' width="10%">
<a href="muestrabases.php" title="Modificar base de datos"><img src="muestrabases.png" width="30px"></a>
</td><td align='right' width="10%">
<a href="crea.php" title="Crear nueva base de datos"><img src="creabase.png" width="30px"></a>
</td></td></table>

<!--  <a href="index.php"><img src="atras.png" width="30px"></a>      -->
<!-- <button class="button">BDatos</button> -->
<br>
<?php
listarArchivos( "bases",$cuantosarchivos,$archives ); 


?>
<!-- <br><br> -->
<!-- <a href="crea.php"><button class="button">Crear base de datos</button></a> -->

<script>
function confirmar()
{
	if(confirm('\nATENCIÓN. Vas a acceder a la zona de eliminación de bases de datos. \n¿Deseas continuar? '))
		return true;
	else
		return false;
}
</script>
