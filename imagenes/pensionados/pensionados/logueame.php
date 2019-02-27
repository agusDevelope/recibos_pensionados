<?php
session_start();

if (isset($_POST['user']) && isset($_POST['segusoc']))
{
    $connect = mysqli_connect("localhost","S3rg10","S3rg10","timbradopensionados");
    if (mysqli_connect_errno())
    {
        echo "Fallo la conexión con la Base de Datos" . mysqli_connect_error();
        echo "0";
        exit();
    }
    mysqli_select_db($connect,"timbradopensionados") or die("Fallo la Selección con la Base de Datos ");
    mysqli_set_charset($connect,"utf8");


    $user= mysqli_real_escape_string($connect,$_POST['user']);
    $segusoc = mysqli_real_escape_string($connect,$_POST['segusoc']);
    $sql = "select pensionado,nss from timbradopensionados.timusr where pensionado =" . $_POST['user'] . " and nss = " .  $_POST['segusoc'];
    $result = mysqli_query($connect,$sql);
    $num_row = mysqli_num_rows($result);
    if($num_row == 1){
            $data = mysqli_fetch_assoc($result);
            $_SESSION["user"] = $data["pensionado"];
            $_SESSION["segusoc"] = $data["nss"] ;
            $_SESSION["cadenames"]  = "nada";
            $_SESSION["ejercicio"]  = 0;
            mysqli_free_result($result);
            mysqli_close($connect);
            echo "1";
    }else{
        echo "No se encontraron datos" ;
    }
}else{
    echo  "error 2";
}
?>