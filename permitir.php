<?php session_start(); 
include("constantes.php"); 
$_SESSION["editar"]=$_SESSION["editar"]*-1;
?>
<script>window.history.back();</script>
