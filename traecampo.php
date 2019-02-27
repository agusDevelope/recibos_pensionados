<?php
session_start();
 $cadenames = $_POST['cadenames'];
 $_SESSION["cadenames"] = $cadenames;
echo "1";
?>