<?php


		//session_start();

	if (isset($_SESSION["user"]) && isset($_SESSION["segusoc"]))
	{
	    $connect = mysqli_connect("localhost","root","","timbradopensionados");
	    if (mysqli_connect_errno())
	    {
	        echo "Fallo la conexión con la Base de Datos" . mysqli_connect_error();
	        echo "0";
	        exit();
	    }
	    mysqli_select_db($connect,"timbradopensionados") or die("Fallo la Selección con la Base de Datos ");
	    mysqli_set_charset($connect,"utf8");


	    $user= mysqli_real_escape_string($connect,$_SESSION["user"]);
	    $segusoc = mysqli_real_escape_string($connect,$_SESSION["segusoc"]);
	    $sql = "select * from timbradopensionados.timusr where pensionado =" . $_SESSION["user"] . " and nss = " .  $_SESSION["segusoc"];

	    $result = mysqli_query($connect,$sql);
	    $num_row = mysqli_num_rows($result);

	    if($num_row == 1){
	            $data = mysqli_fetch_assoc($result);
	            

	            $timusr = array(
	            	'pensionado' => $data["pensionado"],
	            	'nss' => $data["nss"],
	            	'rfc' => $data["rfc"],
	            	'curp' => $data["curp"],
	            	'nombre' => $data["nombre"],
	            	'validador' => $data["validador"]
	             );

	            mysqli_free_result($result);
	            mysqli_close($connect);
	    }else{
	        echo "No se encontraron datos" ;
	    }
	}else{
	    echo  "error 2";
	}



?>