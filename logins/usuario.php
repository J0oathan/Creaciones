<!DOCTYPE html>
<html lang="en">
<head>
  <title>Imprenta Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="login/js/act.js"></script>
  <script src="login/js/upindex.js"></script>

  <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>


<?php 
    session_start();
    if (isset($_SESSION['name'])) {
      
      //echo "Bienvenido ".$_SESSION['name'];
      //echo "<a href='login/php/cerrar.php'>Cerrar sesion</a>";

    }else{

      header("Location: login/index.html");
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
        <li class="active"><a href="../index.php">Home</a></li>
        <!--<li><a href="#">Productos</a></li>-->
        <li><a href="../contact.html">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login/php/cerrar.php"><span cphlass="glyphicon glyphicon-user"></span> Cerrar sesion</a></li>
        <!--<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>-->
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4" onmouseover="act1()">
      <div class="panel panel-primary">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" onmouseover="up1i()" id="up1i"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Precio: <span id="pr1" ></span></p></div>
      </div>
    </div>
    <div class="col-sm-4" onmouseover="act2()">
      <div class="panel panel-danger">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" onmouseover="up2i()" id="up2i"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Precio: <span id="pr2"></span></p></div>
      </div>
    </div>
    <div class="col-sm-4" onmouseover="act3()">
      <div class="panel panel-success">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" onmouseover="up3i()" id="up3i"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Precio: <span id="pr3"></span></p></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container" onmouseover="act4()">
  <div class="row">
    <div class="col-sm-4" >
      <div class="panel panel-primary">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" onmouseover="up4i()" id="up4i"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Precio: <span id="pr4"></span></p></div>
      </div>
    </div>
    <div class="col-sm-4" onmouseover="act5()">
      <div class="panel panel-primary">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" onmouseover="up5i()" id="up5i"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Precio: <span id="pr5"></span></p></div>
      </div>
    </div>
    <div class="col-sm-4" onmouseover="act6()">
      <div class="panel panel-primary">
        <div class="panel-heading">Producto</div>
        <div class="panel-body" onmouseover="up6i()" id="up6i"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Precio: <span id="pr6"></span></p></div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center"> 
  <p>Online Store Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <a href="login/index.html"><button type="button" class="btn btn-danger">Registrate</button></a>
  </form>
</footer>

</body>
</html>
