<?php session_start(); 
include("constantes.php"); 
 
include("cincoysiete.css"); 
?>

<html lang="es">
<link rel="manifest" href="manifest.json">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" type="image/png" href="favicon.png" />


<title>Crea Base de datos</title>

<?php
// $trozo="";
// $ero=fopen("config.php","r") or die("Error en base de datos");
// while (!feof($ero)) 
// {
// $linea=fgets($ero);
// $trozo=$trozo.$linea;
// }
// fclose($ero);
?>

<div class="contenedor">
<center>
<table width='86%' border='0' bgcolor="<?php echo $colo; ?>">
<tr><td align='left' width="10%">
<a href="abre.php"><img src="salida.png" width="30px"></a>
<!-- <tr><td align='center' width="10%">
<a href="abre.php"><button class="button5"><</button></a> -->
</td><td align='center'>
Crear base de datos
</td></td></table>
<br>

<form method="POST" action="creabase.php" enctype="multipart/form-data" style="max-width:500px;margin:auto">
<input class="input-field" required type="text" placeholder="Nombre de la base de datos" name="nombre" value="" title="">
<input class="input-field" required type="text" placeholder="Comentario de la base de datos" name="comen" value="" title="">
<input class="input-field" type="number" placeholder="Decimales en campos numéricos" name="decimales" value="">
<!-- <input class="input-field" name="colorfondo" type="color" value="#bbd7cf" placeholder="Color por defecto de la aplicacion" title="Selecciona el color por defecto para la carta"/> -->

<br>
<br>
<?php

for ($f=1;$f<=$numcampos;$f++){
echo "CAMPO ".$f;
?>

<input class="input-field"  type="text" placeholder="Nombre del campo" name="nom<?php echo $f; ?>" value="" title="Rellena solo los campos que necesites">

<select name="tipo<?php echo $f; ?>">
<option value="">tipo de campo</option>
<option value="text">texto</option>
<option value="date">fecha</option>
<option value="time">hora</option>
<option value="number">número</option>
<option value="textarea">área</option>
<option value="image">imagen</option>
<option value="url">url</option>
<option value="doc">documento</option>
</select>

<select name="suma<?php echo $f; ?>" title="Selecciona SI si quieres que se sumen los valores de esta columna">
<option value="">Sumatorio</option>
<option value="si">Si</option>
</select>

<select name="media<?php echo $f; ?>" title="Selecciona SI si quieres que se calcule la media de los valores de esta columna">
<option value="">Media</option>
<option value="si">Si</option>
</select>
<br>
<br>
<?php
}
?>

<br>
<!-- <textarea name="config" rows="30"><?php echo $trozo; ?></textarea> -->
<input class="submit" type="submit"  value="Crear">

<?php
