    <!DOCTYPE html>
<html lang="en">
<head>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.js">
  <link rel="stylesheet" href="css/estiloboos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilo.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>Creaciones BBJ-compras</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<body>

<!-- Navigation -->
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
                <a class="navbar-brand" href="inicio.php">Creaciones BBJ</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="contact.html">Contacto</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">COMPRAS</p>
                <div class="list-group">
                    <a href="inicio.php" class="list-group-item">Inicio</a>
                    <a href="Manual/Manual.php" class="list-group-item">Manual de compras</a>
                    
                </div>
            </div>
           

           <br>
            <p class="lead">Regístro para el envio</p>
    

        <center>


        <div id="centro" class="col-sm-4 col-lg-4 col-md-4"> 
        <form action="enviar.php" method="post" name="form1" enctype="multipart/form-data"> 
            <div><label>*A nombre de (Nombre completo)  :</label><input id="Nombre" name="Nombre" type="text" ></div>
            <br />
            <div><label>*Calle:</label><input id="Calle" name="Calle" type="text"></div>
            <br />
            <div><label>*Colonia:</label><input id="Colonia" name="Colonia" type="text" ></div>
            <br />
            <div><label>*Codigo postal:</label><input id="CP" name="CP" type="text" ></div>
            <br />
            <div><label>*Codigo del producto:</label><input id="CODE" name="CODE" type="text" ></div>
            <br />
            <div><label>*Correo electronico:</label><input id="Email" name="Email" type="email" ></div>
            <br />
             <div><label>Descripción:</label><textarea id="Mensaje" name="Mensaje" cols="30" align=letf rows="6" >Agrega una descripcion..</textarea></div>
            <br />
            <div><label for="exampleInputFile">Elegir imagen para tu producto</label>
            <input type="file" name="adjunto" id="archivo-adjunto"></div>
            <br />
            <div><label for="exampleInputFile">*Foto de ticket de pago</label>
            <input type="file" name="adjunto2" id="archivo-adjunto"></div>

            <div><input type="submit" value="Enviar" id="Enviar" class="btn btn-lg btn-primary"></div> 
            <br>
           
            
        </form>
        </div> 

        <div >
                    
                </div>
        </center>

         
            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/imagen30.png" alt="">
                            <div class="caption">
                              
                                <h4><a href="#">Número de cuenta para depositos</a>
                                </h4>
                               
                            </div>
                            
                        </div>
                    </div>
                

        
                    
        <br />
        
        <div style = "font-size:16px; color:#cc0000;"></div>

    
</div>
    </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>








</body>
</html>