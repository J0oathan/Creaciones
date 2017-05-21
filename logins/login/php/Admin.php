<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src=../js/act.js ></script>
  <link rel="stylesheet" href="../../CSS/estilos.css">
</head>
<body>

	<?php 
		session_start();
		if (isset($_SESSION['user'])) {
			
			//echo "Bienvenido ";
			//echo "<a href='cerrar.php'>Cerrar sesion</a>";

		}else{

			header("Location: ../index.html");
		}


	 ?>




<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Creaciones BBJ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <!--<li><a href="#">Productos</a></li>-->
        <li><a href="../contact.html">Contacto</a></li>
        <li><a href="../indexr.html">Registro</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cerrar.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesion</a></li>
        <!--<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>-->
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" id="up1"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          <input id="n1" type="text" placeholder="Nombre">
          <input id="p1" type="text" placeholder="Precio"><br>
          <button id="ac1" onclick="prod1()">Actualizar</button><br><br>


<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" />
</form>
<button onclick="up1()">Cargar</button>



          <p id="res1"></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" id="up2"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
        <input id="n2" type="text" placeholder="Nombre">
        <input id="p2" type="text" placeholder="Precio"><br>
        <button id="ac2" onclick="prod2()">Actualizar</button><br><br>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" />
</form>
<button onclick="up2()">Cargar</button>



        <p id="res2"></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" id="up3"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
        <input id="n3" type="text" placeholder="Nombre">
        <input id="p3" type="text" placeholder="Precio"><br>
        <button id="ac3" onclick="prod3()" >Actualizar</button><br><br>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" />
</form>
<button onclick="up3()">Cargar</button>

        <p id="res3"></p>
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" id="up4"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
        <input id="n4" type="text" placeholder="Nombre">
        <input id="p4" type="text" placeholder="Precio"><br>
        <button id="ac4" onclick="prod4()">Actualizar</button><br><br>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" />
</form>
<button onclick="up4()">Cargar</button>

        <p id="res4"></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" id="up5"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
        <input id="n5" type="text" placeholder="Nombre">
        <input id="p5" type="text" placeholder="Precio"><br>
        <button id="ac5" onclick="prod5()" >Actualizar</button><br><br>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" />
</form>
<button onclick="up5()">Cargar</button>

        <p id="res5"></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" id="up6"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
        <input id="n6" type="text" placeholder="Nombre">
        <input id="p6" type="text" placeholder="Precio"><br>
        <button id="ac6" onclick="prod6()" >Actualizar</button><br><br>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" />
</form>
<button onclick="up6()">Cargar</button>

        <p id="res6"></p>
        </div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <a href="../index.html"><button type="button" class="btn btn-danger">Registrate</button></a>
  </form>
</footer>



	
</body>
</html>