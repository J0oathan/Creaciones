	<?php
	
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}
	
	$sql = "SELECT id, tipo FROM tipo_usuario";
	$result=$mysqli->query($sql);
	
	$bandera = false;
	
	if(!empty($_POST))
	{
		$nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
		
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		$tipo_usuario = $_POST['tipo_usuario'];
		//$sha1_pass = sha1($password);
		
		$error = '';
		
		$sqlUser = "SELECT id FROM usuarios WHERE usuario = '$usuario'";
		$resultUser=$mysqli->query($sqlUser);
		$rows = $resultUser->num_rows;
		
		if($rows > 0) {
			$error = "El usuario ya existe";
			} else {
			
			$sqlPerson = "INSERT INTO personal (nombre) VALUES('$nombre')";
			$resultPerson=$mysqli->query($sqlPerson);
			$idPersona = $mysqli->insert_id;
			
			$sqlUsuario = "INSERT INTO usuarios (usuario, password, id_personal, id_tipo) VALUES('$usuario', '$password','$idPersona','$tipo_usuario')";
			$resultUsuario = $mysqli->query($sqlUsuario);
			
			if($resultUsuario>0)
			$bandera = true;
			else
			$error = "Error al Registrar";
			
		}
	}
	
?>


<html>
	<head>
		<title>Registro</title>

		
		<link rel="stylesheet" href="css/estilo.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="company is a free job board template">
        <meta name="author" content="Ohidul">
        <meta name="keyword" content="html, css, bootstrap, job-board">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
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
        <script src="sweetalert-master/dist/sweetalert.min.js"></script>
  		<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">


		<script>
			function validarNombre()
			{
				valor = document.getElementById("nombre").value;
				if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
					swal("Falta llenar nombre!");
					return false;
				} else { return true;}
			}
			
			function validarUsuario()
			{
				valor = document.getElementById("usuario").value;
				if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
					swal('Falta Llenar Usuario');
					return false;
				} else { return true;}
			}



			function validarPassword()
			{
				valor = document.getElementById("password").value;
				if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
					swal('Falta Llenar Password');
					return false;
					} else { 
					valor2 = document.getElementById("con_password").value;
					
					if(valor == valor2) { return true; }
					else { swal('Las contraseñas no coinciden'); return false;}
				}
			}
			
			function validarTipoUsuario()
			{
				indice = document.getElementById("tipo_usuario").selectedIndex;
				if( indice == null || indice==0 ) {
					swal('Seleccione tipo de usuario');
					return false;
				} else { return true;}
			}
			
			function validar()
			{
				if(validarNombre()  && validarUsuario() && validarPassword() && validarTipoUsuario())
				{
					document.registro.submit();
				}
			}
			
		</script>
		
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
	
    	<br>
    	<br>
    	<br>
		<center>
		<form id="registro" name="registro" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
			<div><label>Nombre:</label><input id="nombre" name="nombre" type="text" ></div>
			<BR>
			
			<div><label>Usuario:</label><input id="usuario" name="usuario" type="text"></div>
			<br />
			
			<div><label>Password:</label><input id="password" name="password" type="password"></div>
			<br />
			
			<div><label>Confirmar Password:</label><input id="con_password" name="con_password" type="password"></div>
			<br />
			
			<div><label>Tipo Usuario:</label>
				<select id="tipo_usuario" name="tipo_usuario">
					<option value="0">Seleccione tipo de usuario...</option>
					<?php while($row = $result->fetch_assoc()){ ?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['tipo']; ?></option>
					<?php }?>
				</select>
			</div>
			<br />
			
			<div class="btn-group">
			<input name="registar" type="button" value="Registrar" onClick="validar();" class="btn btn-primary"><input type="button" onclick=" location.href='vertabla.php' " value="Ver usuarios registrados" name="boton" class="btn btn-primary"/>
			<input type="button" onclick=" location.href='welcome.php' " value="Regresar" name="boton" class="btn btn-primary" />
			</div>
			
		</form>
		</center>
		
		<?php if($bandera) { ?>
			<center>

			<script>
				swal("Registrado!", "Registrado en la base de datos!", "success")
			</script>

			</center>
			<a href="welcome.php" >Regresar</a>
			
			<?php }else{ ?>
			<br />
			<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?>
				<script>
					swal({
					title:"El usuario ya existe!",
					timer:500,
					showConfirmButton: false
				}
					);
				</script>

			</div>
			
		<?php } ?>



		

		
	</body>
	
</html>