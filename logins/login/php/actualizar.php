<?php 


$nom = $_POST['nom'];
$prec= $_POST['pre'];
$num= $_POST['num'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registros";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection



$res= mysqli_query($conn,"UPDATE productos SET Producto = '$nom', Precio= '$prec' WHERE Numero = '$num'");
echo "Actualizado";

 ?>