<!--   INTERFAZ DE LA BASE DE DATOS PARA ELIMINAR Y DAR DE ALTA-->	
<?php
	
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}
	
	$sql = "SELECT id, tipo FROM tipo_usuario";
	$result=$mysqli->query($sql);
	
	$bandera = false;
?>
	<?php  $query="SELECT *  FROM usuarios";

	$resultado=$mysqli->query($query);
	?>
	<?php  $query1="SELECT *  FROM personal";

	$resultado1=$mysqli->query($query1);
	?>




<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios Registrados</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="company is a free job board template">
        <meta name="author" content="Ohidul">
        <meta name="keyword" content="html, css, bootstrap, job-board">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="consulta.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Ferreteria en linea</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="#">Servicios</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Salir</a></li>
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<div class="container" id="con">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                    <br>
                    <br>
                    <h2>Lista de Usuarios</h2>
                    <p>Lista de usuarios activos en el sistema</p>

                    <table>
                        <thead>
                            <tr class="centro">
                                <td>Id</td>
                                
                                <td>Usuario</td>
                            
                                <td>Password</td>
                                <td>Id tipo 1 Administrador, 2 Usuario</td>
                                <td colspan="2">Modificar Usuarios</td>
                                
                          
                            </tr>
                            <tbody>
                                <?php while($row=$resultado->fetch_assoc()){ ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['id'];?>
                                        </td>
								
                                        
                                        <td>
                                            <?php echo $row['usuario'];?>
                                        </td>

                                        
                                      
                                        <td>
                                            <?php echo $row['password'];?>
                                        </td>
                                       
                                        <td>
                                            <?php echo $row['id_tipo'];?>
                                        </td>
										<td>
                                            <a href="modificar.php?id=<?php echo $row['id'];?>" type="button" class="btn btn-warning">Modificar</a>
                                        </td>
                                        <td>
                                            <a href="eliminar.php?id=<?php echo $row['id'];?>" type="button" class="btn btn-danger">Eliminar</a>
                                        </td>
                                      
                                    </tr>
                                    <?php } ?>
                            </tbody>
                    </table>
							<br><center><a href="welcome.php" class="btn btn-lg btn-primary btn-md">REGRESAR</a></center>
                </div>

            </div>
        </div>




</body>
</html>