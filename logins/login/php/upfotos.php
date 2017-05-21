<?php

 $num = $_POST['num'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registros";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

$res= mysqli_query($conn,"SELECT * FROM imagenes");

for ($setu = array (); $rowu = $res->fetch_assoc(); $setu[] = $rowu['Direccion']);


echo "<img src=login/php/uploads/".$setu[$num]." class=img-responsive style=width:100%".">";



 ?>