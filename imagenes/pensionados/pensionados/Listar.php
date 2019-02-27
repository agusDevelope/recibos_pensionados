<?php
   //include "Conecta.php";


   //NOS CONECAMOS A LA BASE DE DATOS
   //REMPLAZEN SUS VALOS POR LOS MIOS
   mysql_connect("localhost","root","Mar2017chezz1972") or die("No se pudo conectar a la base de datos");

   //SELECCIONAMOS LA BASE DE DATOS CON LA CUAL VAMOS A TRABAJAR CAMBIEN EL VALOR POR LA SUYA
   mysql_select_db("TimbradoPensionados");

   //CONSTRUIMOS LA CONSULTA PARA OBTENER EL DOCUMENTO
   $qry="Select rene from Tim2018 where pensionado=11";
   $res=mysql_query($qry) or die(mysql_error()." qry::$qry");
   $obj=mysql_fetch_object($res);

   //OBTENEMOS EL TIPO MIME DEL ARCHIVO ASI EL NAVEGADOR SABRA DE QUE SE TRATA
   //header("Content-type: {$obj->tipo}");
   //header("Content-name: {$obj->nombre}");
   //OBTENEMOS EL NOMBRE DEL ARCHIVO POR SI LO QUE SE REQUIERE ES DESCARGARLO
//   header('Content-Disposition: attachment; filename="'.$obj->name.'"');

   header('Content-Disposition: attachment; filename="archivoenero.pdf"');

   //Y PO ULTIMO SIMPLEMENTE IMPRIMIMOS EL CONTENIDO DEL ARCHIVO
   print $obj->rene;

   //CERRAMOS LA CONEXION
   mysql_close();


?>
