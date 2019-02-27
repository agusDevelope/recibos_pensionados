<?php
//Primero, arranca el bloque PHP y checkea si el archivo tiene nombre.  Si no fue asi, te remite de nuevo al formulario de inserción:
// No se comprueba aqui si se ha subido correctamente.
if (empty($_FILES['archivo']['name'])){
header("location: formulario.php?proceso=falta_indicar_fichero"); //o como se llame el formulario ..
exit;
}

//establece una conexión con la base de datos.
include "Conecta.php";
//$conexion = mysql_connect("localhost","","") or die("No se pudo realizar la conexion con el servidor.");
//mysql_select_db("tu_bd",$conexion) or die("No se puede seleccionar BD"); // tu_bd es el nombre de la Base de datos .. por siaca.

// archivo temporal (ruta y nombre).
$binario_nombre_temporal=$_FILES['archivo']['tmp_name'] ;
$binario_tipo=$_FILES['archivo']['type'];
// leer del archvio temporal .. el binario subido.
// "rb" para Windows .. Linux parece q con "r" sobra ...
$binario_contenido = addslashes(fread(fopen($binario_nombre_temporal, "rb"), filesize($binario_nombre_temporal)));

// Obtener del array FILES (superglobal) los datos del binario .. nombre, tabamo y tipo.
$binario_nombre=$_FILES['archivo']['name'];

//insertamos los datos en la BD.
$consulta_insertar = "INSERT INTO timbradopensionados.tim2018 (pensionado,nss,rene ) VALUES (12,2, '$binario_contenido')";
mysqli_query($conexion,$consulta_insertar) or die("No se pudo insertar los datos en la base de datos." .$conexion->error);

//header("location: listar_imagenes.php");  // si ha ido todo bien
//echo "$binario_tipo";
exit;
?>
