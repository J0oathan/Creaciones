<?php  
session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}

		$id = $_REQUEST['id'];
		

		

		$query = "DELETE FROM usuarios WHERE id='$id'";
		
		$resultado = $mysqli->query($query);

		if($resultado){
			header("Location: vertabla.php");
			

		}
		else{
			echo "insercion no exitosa";
		}


?>