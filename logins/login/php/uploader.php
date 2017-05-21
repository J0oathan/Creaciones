<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registros";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

	
	$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}

$file_name= $_FILES['uploadedfile']['name'];


$sql= mysqli_query($conn,"INSERT INTO imagenes (Direccion) VALUES ('$file_name')");


 ?> 