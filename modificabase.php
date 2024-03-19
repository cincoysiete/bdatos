?<?php include("identifica.php"); 
include("constantes.php"); 
include("encriptado.php"); 
include("cincoysiete.css"); 
?>

<html lang="es">
<link rel="manifest" href="manifest.json">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" type="image/png" href="favicon.png" />


<title>Modifica Base de datos</title>

<?php
$esabase=$_GET["mtk"];
include($_GET["mtk"]);
$kaka1=explode("/",$mibase);
$_SESSION["nombrebase"]=$kaka1[1];

// $numcampos=0;
// for ($f=1;$f<=20;$f++){if ($col[$f]!=""){$numcampos++;}}
?>

<div class="contenedor">
<center>
<table width='86%' border='0' bgcolor="<?php echo $colo; ?>">
<tr><td align='left' width="10%">
<a href="abre.php"><img src="volver.png" width="30px"></a>
<!-- <tr><td align='center' width="10%">
<a href="abre.php"><button class="button5"><</button></a> -->
</td><td align='center'>
Modificar base de datos
</td></td></table>
<br>

<form method="POST" action="modificabaseguarda.php" enctype="multipart/form-data" style="max-width:500px;margin:auto">
<input class="input-field" required type="text" placeholder="Nombre de la base de datos" name="nombre" value="<?php echo $_SESSION["nombrebase"]; ?>" title="">
<input class="input-field" required type="text" placeholder="Comentario de la base de datos" name="comen" value="<?php echo $come; ?>" title="">
<input class="input-field" type="number" placeholder="Decimales en campos numéricos" name="decimales" value="<?php echo $deci; ?>">
<!-- <input class="input-field" name="colorfondo" type="color" value="#bbd7cf" placeholder="Color por defecto de la aplicacion" title="Selecciona el color por defecto para la carta"/> -->

<br>
<br>
<hr>
<br>
<br>

<?php

for ($f=1;$f<=$numcampos;$f++){
$polo="";
$pola="";
$tope=0;
if ($col[$f+1]==""){$tope=1;}

if ($col[$f]!="" and $f!=1){$polo="    <a href='sube.php?esabase=".$esabase."&onde=".$f."'><img src='sube.png' width='20px'></a>";} else {$polo="          ";}

if ($tope==0) {$pola="<a href='baja.php?esabase=".$esabase."&onde=".$f."'><img src='baja.png' width='20px'></a>    ";}

if ($col[$f]!="") {echo "<b><font color='green'>".$pola."CAMPO ".$f."".$polo."</b></font>";
} else {echo "CAMPO ".$f;}

?>
<input class="input-field"  type="text" placeholder="Nombre del campo" name="nom<?php echo $f; ?>" value="<?php echo $col[$f]; ?>" title="Rellena solo los campos que necesites">

<table width='100%' border='0'>
<tr><td align='left' width="33%">

<select name="tipo<?php echo $f; ?>">
<option value="<?php echo $tip[$f]; ?>"><?php echo $tip[$f]; ?></option>
<option value="text">texto</option>
<option value="date">fecha</option>
<option value="time">hora</option>
<option value="number">número</option>
<option value="textarea">área</option>
<option value="image">imagen</option>
<option value="url">url</option>
<option value="doc">documento</option>
</select>

<td align='left' width="33%">
<select name="suma<?php echo $f; ?>" title="Selecciona SI si quieres que se sumen los valores de esta columna">
<option value="<?php echo $sum[$f]; ?>"><?php echo $sum[$f]; ?></option>
<option value="si">Si</option>
</select>

<td align='left' width="33%">
<select name="media<?php echo $f; ?>" title="Selecciona SI si quieres que se calcule la media de los valores de esta columna">
<option value="<?php echo $med[$f]; ?>"><?php echo $med[$f]; ?></option>
<option value="si">Si</option>
</select>
</table>
<hr>
<br>
<br>
<?php
}
?>
<br>
<!-- <textarea name="config" rows="30"><?php echo $trozo; ?></textarea> -->
<input class="submit" type="submit"  value="Modificar">
<br>
<?php
