<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Aprendiendo +</title>

  <link rel="stylesheet" type="text/css" href="res/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="res/lib/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="res/btn-label.css">
  <link rel="stylesheet" type="text/css" href="res/lib/bootstrap/css/style.css">
  <script src="res/lib/jquery/jquery.min.js"></script>



</head>
<body >




<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./">Aprendiendo +</a>
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
        <li><a href="index.php?view=clientaccess"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a></li>
        <li><a href="index.php?view=register"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
      </ul>

    <?php else:
     $usuarios = UsuariosData::getById($_SESSION["client_id"]);
?>
    
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp; <?php echo $usuarios->nombre." ".$usuarios->apellido;?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=usuarioaccess">Inicio</a></li>
          <li><a href="logout.php">Salir</a></li>
        </ul>
      </li>

<?php endif; ?>



    </div>
  </div>
</nav>




   <?php View::load("index"); ?>


<br><br><br>



<br>
  <script src="res/lib/bootstrap/js/bootstrap.min.js"></script>
  <script>
  $(".tip").tooltip();
  </script>
</body>
</html>