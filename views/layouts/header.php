<?php

	if ( !isset($_SESSION['user']) ) {
  $_SESSION['user'] = 'invitado';
}
 define('BASEURL','http://192.168.0.10/admondb/Admonbd'); 
 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase programacion web</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/mi.css" rel="stylesheet">
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tournament Administrator</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav ">
            <li class="active"><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Inicio</a></li>
            <?php
            	if($_SESSION['user'] != 'invitado'):
            	?>
            <li ><a href="<?php echo BASEURL; ?>/views/site/torneos.php">Torneos <?php $_SESSION['user'] ?></a></li>
            <li><a href="<?php echo BASEURL; ?>/views/site/equipos.php">Equipos</a></li>
            <li><a href="<?php echo BASEURL; ?>/views/site/Jugadores.php">Jugadores</a></li>
            <li><a href="<?php echo BASEURL; ?>/views/site/organizar.php">Organizar</a></li>
			<?php
              endif;
            ?>

          </ul>
         

		  <?php 
              if ( $_SESSION['user'] == 'invitado' ):                
            ?>
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="<?php echo BASEURL; ?>/views/site/registro.php">Registrarse</a></li>
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">Log in</a></li>

		
          </ul>
		  <?php 
              else:
          ?>
			    <ul class="nav navbar-nav navbar-right">
					  <li><a href="<?php echo BASEURL; ?>/views/site/logout.php">Log out</a></li>
				</ul>
		<?php
              endif;
            ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container theme-showcase" role="main">

