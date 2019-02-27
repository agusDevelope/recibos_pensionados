
<?php
$Servidor = "localhost";
$UserName = "root";
$Password ="";
$ejercicio = 2018;


$conexion = mysqli_connect("localhost","root","","timbradopensionados");
if (mysqli_connect_errno())
{
  echo "Fallo la conexión con la Base de Datos" . mysqli_connect_error();
  exit();
}
mysqli_select_db($conexion,"timbradopensionados") or die("Fallo la Selección con la Base de Datos ");
mysqli_set_charset($conexion,"utf8")
 ?>
