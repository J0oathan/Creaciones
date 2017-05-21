<?php 

$num = $_POST['num'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registros";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

$res= mysqli_query($conn,"SELECT * FROM productos WHERE Numero = '$num'");

for ($setu = array (); $rowu = $res->fetch_assoc(); $setu[] = $rowu['Precio']);
echo "$".$setu[0];


 ?>