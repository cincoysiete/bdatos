<?php include("identifica.php"); 
include("variables.php"); 
include("constantes.php");
 
include("cincoysiete.css"); 

?>

<html lang="es">
<link rel="manifest" href="manifest.json">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" type="image/png" href="<?php echo $log; ?>" />
<meta charset="UTF-8">


<title><?php echo $nom; ?></title>

<?php
$_SESSION["filtro"]="";
$_SESSION["columna"]="";


echo '<script>location.href="tabla.php"</script>';

?>

