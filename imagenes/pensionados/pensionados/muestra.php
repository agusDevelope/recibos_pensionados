<?php
session_start();

$conexion = mysqli_connect( "localhost","S3rg10","S3rg10","timbradopensionados") or die("No se pudo realizar la conexion con el servidor.");
mysqli_select_db($conexion,"timbradopensionados") or die("No se puede seleccionar BD"); // tu_bd es el nombre de la Base de datos .. por siaca.

//$consulta = "select rene  from timbradopensionados.tim2018 where pensionado =12" ;
$consulta = "select " . $_SESSION["cadenames"] .  "  from timbradopensionados.tim" . $_SESSION["ejercicio"]  . " where pensionado =" . $_SESSION["user"] . " and nss = " . $_SESSION["segusoc"] ;

$result =mysqli_query($conexion,$consulta);
$fila = mysqli_fetch_array($result, MYSQLI_NUM); 
header('Content-type: application/pdf');
echo $fila[0];  
//echo $consulta;
mysqli_close($conexion);
exit;
?>


