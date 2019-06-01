<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aprendiendo +</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="res/css/Estilos.css">
</head>
<body background="img/matematicas.png">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Aprendiendo +</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Noticias</a></li>
        <li><a href="#">Ranking</a></li>
        <li><a href="#">Contactanos</a></li>
        <li><a href="#">Deseas Enseñar</a></li>

      </ul>

      <?php if(!isset($_SESSION["client_id"])):?>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?view=usuarioaccess"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a></li>
        <li><a href="index.php?view=register"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
      </ul>

    <?php else:
     $usuarios = UsuariosData::getById($_SESSION["client_id"]);
?>
    
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp; <?php echo $usuarios->nombre." ".$usuarios->apellido;?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=client">Inicio</a></li>
          <li><a href="logout.php">Salir</a></li>
        </ul>
      </li>

<?php endif; ?>



    </div>
  </div>
</nav>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="res/img/1.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="res/img/2.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="res/img/3.png" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="res/img/4.png" alt="New york" style="width:100%;">
      </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br><br>

<!-- Aqui esta la segunda parte -->

        <div class="container">
            <div class="row">
                <div class="col-md-3"><!--aqui inicia la columna izquierda-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Historial de temas
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <ul style="list-style-type:circle;">
                                            <li>Programacion</li>
                                            <li>Diseño</li>
                                            <li>Historia</li>
                                            <li>Quimica</li>
                                            <li>Electronica</li>
                                            <li>Seguridad</li>
                                            <li>Ciencia sociales</li>
                                            <li>Programacion2</li>
                                            <li>Diseño2</li>
                                            <li>Historia2</li>
                                            <li>Quimica2</li>
                                            <li>Electronica2</li>
                                            <li>Seguridad2</li>
                                            <li>Ciencia sociales2</li>
                                            
                                        </ul>   
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                    <br>
                                        <br>
                                        <br>
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="Que Tema Buscas?">                                        
                                    </div>
                                    <button class="form-control">Buscar</button>
                                </div>
                            </div>

                        </div>

                    </div><!--primera fila termina-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>  Ranking 10
                                </div>
                                <div class="panel-body">

                                    <ol type="1">
                                      <li><span class="glyphicon glyphicon-search" aria-hidden="true"></span>   Jose luis</li>
                                      
                                        <li><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>   Marco antonio</li>
                                        
                                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>   Jessica</li>
                                        
                                        <li><span class="glyphicon glyphicon-road" aria-hidden="true"></span>   Miguel</li>
                                        <li><span class="glyphicon glyphicon-bell" aria-hidden="true"></span>   Carlos</li>
                                        <li><span class="glyphicon glyphicon-fuego" aria-hidden="true"></span>   Samuel</li>
                                        <li><span class="glyphicon glyphicon-magnet" aria-hidden="true"></span>   cristhiam</li>
                                        <li><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>   Pedro</li>
                                        <li><span class="glyphicon glyphicon-certificado" aria-hidden="true"></span>   Diego</li>
                                        <li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>   Hector</li>
                                        
                                       
                                        </ol>  
                                    <br>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <br>
                                        <br>
                                        <br>
                                        <input type="search" class="form-control" placeholder="ingresa tu nick?">                                        
                                    </div>
                                    <button class="form-control">Buscate</button>
                                </div>
                            </div>

                        </div>

                    </div><!--termina 2 fila-->


                </div><!--termina columna izquierda-->
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>  Ultimas Noticias
                        </div>
                        <div class="panel-body">
                            <p>Todabia no hay noticias que mostrar</p>
                        </div>
                    </div>
                </div>
<div class="col-md-9">
                    <div class="form-group">
 					 	<label for="comment">Comentanos:</label>
  						<textarea class="form-control" rows="5" id="comment"></textarea>
  						<br>
  						<button type="button" class="btn btn-primary" data-dismiss="modal">Comentar</button>
					</div>
                </div>
            </div>

        </div>
                
                	
                </div>

            </div>

        </div>

</body>
</html>
