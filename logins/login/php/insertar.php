<?php

$nom = $_REQUEST['no'];
$contra= $_REQUEST['pas'];
$email= $_REQUEST['em'];
$tip= $_REQUEST['tip'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registros";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection



$sel = mysqli_query($conn,"SELECT Correo FROM usuarios WHERE Correo='$email'");
$num =mysqli_num_rows($sel);


if($num>0){

		echo "El correo ya existe";

}
else{
	$sql = mysqli_query($conn,"INSERT INTO usuarios (Nombre, Password, Correo, Tipo) VALUES ('$nom', '$contra', '$email', '$tip')");

}



?>
