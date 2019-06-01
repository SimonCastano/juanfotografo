<!DOCTYPE html>
<html lang="es">
<head>
  <title>Administracion</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logotipo.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <link rel="stylesheet" type="text/css" href="fonts/style.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/materialze.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<div class="navbar-fixed hide-on-small-only transparent z-depth-0">
  <nav>
    <div class="nav-wrapper  #424242 white darken-3 ">
      <li class="black-text  brand-logo"> 
        <?php 
        session_start();
        echo "Bienvenido  $_SESSION[usuario]";
        ?></li> 
        <ul class="right hide-on-med-and-down">
          <li><a class="black-text" href="administrar.php">Administrador</a></li>
          <li><a class="black-text" href="mensajes.php">Mensajes</a></li>
          <li><a class="black-text"  href="ad.Galeria.php">Administrar galeria</a></li>
          <li><a class="black-text"  href="cam_imagenes.php">Cambiar imagenes</a></li>
          <li> <form method="post" action="administrar.php">  
            <BUTTON name="btnsalir" class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">power_settings_new</i></BUTTON></form></li>
          </ul>
        </div>
      </nav>
    </div>
    <nav class="hide-on-large-only #424242 black darken-3">
      <ul id="slide-out" class="side-nav ">
        <li><a href="">Administrador</a></li>
        <li><a href="">Mensajes</a></li>
        <li><a  href="producto.php">Productos</a></li>
        <li> <form method="post" action="administrar.php">   <BUTTON name="btnsalir" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">power_settings_new</i></BUTTON></form></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse show-on-large center"><i class="material-icons  hide-on-large-only center">sort</i></a>
    </nav>
    <script type="text/javascript">
    </script>
    <style>
    *{
      font-family: 'Roboto', sans-serif;
    }
  </style>