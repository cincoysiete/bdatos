<?php

$mibase="bases/financia";
$deci="2";
$come="LLeva el control de todas tus finanzas";

$col[1]="NOMBRE";
$tip[1]="text";
$sum[1]="";
$med[1]="";
$cat[1]="";
$hlp[1]="";

$col[2]="CATEGORIA";
$tip[2]="select";
$sum[2]="";
$med[2]="";
$cat[2]=",Casa,Ocio,Plazos";
$hlp[2]="";

$col[3]="NECESIDAD";
$tip[3]="select";
$sum[3]="";
$med[3]="";
$cat[3]=",Nada necesario,Necesario,Muy necesario";
$hlp[3]="";

$col[4]="CICLO";
$tip[4]="select";
$sum[4]="";
$med[4]="";
$cat[4]=",Diario,Semanal,Mensual,Bimestral,Trimestral,Cuatrimestral,Semestral,Anual";
$hlp[4]="";

$col[5]="IMPORTE";
$tip[5]="number";
$sum[5]="si";
$med[5]="";
$cat[5]="";
$hlp[5]="";

$col[6]="INICIO";
$tip[6]="date";
$sum[6]="";
$med[6]="";
$cat[6]="";
$hlp[6]="";

$col[7]="FIN";
$tip[7]="date";
$sum[7]="";
$med[7]="";
$cat[7]="";
$hlp[7]="";

$col[8]="NOTIFICAR";
$tip[8]="select";
$sum[8]="";
$med[8]="";
$cat[8]=",Si,No";
$hlp[8]="Recibirás un email cada ciclo";

$col[9]="ENTIDAD";
$tip[9]="select";
$sum[9]="";
$med[9]="";
$cat[9]=",ING,OpenBank,Evo";
$hlp[9]="Entidad a través de la que se realiza la gestión";

$col[10]="MEDIO";
$tip[10]="select";
$sum[10]="";
$med[10]="";
$cat[10]=",Transferencia manual,Transferencia automatica,Domiciliación";
$hlp[10]="Modo en el que se realiza el cargo o abono";

$col[11]="ORIGEN";
$tip[11]="select";
$sum[11]="";
$med[11]="";
$cat[11]=",ING,OpenBank,Evo";
$hlp[11]="Cuenta de la que sale el dinero";

$col[12]="DESTINO";
$tip[12]="select";
$sum[12]="";
$med[12]="";
$cat[12]=",ING,OpenBank,Evo,Catalana,Orange,UCI";
$hlp[12]="Destinatario del dinero";

$col[13]="FOTO";
$tip[13]="image";
$sum[13]="";
$med[13]="";
$cat[13]="";
$hlp[13]="";

?>