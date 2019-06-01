<!DOCTYPE html>
<html lang="es">
<head>
  <title>Juan tabares fotografia</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/firma.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fonts/style.css">
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
</head>
<body class="hiden">
  <nav class="transparent z-depth-0">
    <div class="nav-wrapper white black-text transparent z-depth-0">
      <a href="index.php" class="brand-logo hide-on-small-only"><img src="img/firma.png " width="30%" height="30%"></a>
      <a href="index.php" class="brand-logo  hide-on-large-only"><img src="img/firma.png " width="100%" height="100%"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse hide-on-large-only"><i class="material-icons black-text">menu</i></a>
      <ul class="brand-logo center hide-on-med-and-down hide-on-small-only fixed">
        <li><a class="black-text" href="inicio.php">INICIO</a></li>
        <li><a class="black-text" href="galeria.php">GALERIA</a></li>
        <li><a class="black-text" href="quien_soy.php">¿QUIEN SOY?</a></li>
        <li><a class="black-text" href="contactame.php">CONTACTAME</a></li>
        <li><a class="black-text" href="servicios.php">SERVICIOS</a></li>
      </ul>
    </div>
    <ul class="side-nav hide-on-large-only white " id="mobile-demo">
      <li><a class="black-text" href="inicio.php">Inicio</a></li>
      <li><a class="black-text" href="galeria.php">Galería</a></li>
      <li><a class="black-text" href="mobile.php">¿Quienes Somos?</a></li>
      <li><a class="black-text" href="contactame.php">Contactame</a></li>
      <li><a class="black-text" href="servicios.php">Servicios</a></li>
    </ul>
  </nav>
  <ul class="icono_fijo cf " > 
    <li><a class="right hoverables transparent "><img src="img/icon 1.png" width="40" height="40"></a></li>
    <br><br><br>
    <li><a class="right hoverables transparent"><img src="img/icon2.png" width="40" height="40"></a></li>
    <br><br><br>
    <li><a class="right hoverables transparent "><img src="img/icon4.png" width="40" height="40"></a></li>
  </ul>

  
  <style type="text/css">
  .icono_fijo{
    width:50px;
    position: fixed;
    left: 0; 
    top: 250px; 
    z-index: 500000;
  }
  .hoverables {
    -webkit-transition: -webkit-box-shadow .1s;
    transition: -webkit-box-shadow .1s;
    transition: box-shadow .1s;
    transition: box-shadow .1s, -webkit-box-shadow .1s;
  }
  .hoverables:hover {
    -webkit-box-shadow: 0 8px 30px 0 rgba(5 , 0.2, 0.2, 5), 0 10px 50px 0 rgba(0, 0, 0, 0);
    box-shadow: 5 8px 30px 0 rgba(5 , 0.2, 0.2, 5), 0 10px 50px 0 rgba(5, 5, 5, 5);
  }
  .open img hover{
    height:50; 
    width:50;
  }
  .icono_fijo ul{
    list-style: none;
  }
  .icono_fijo ul li a hover > img {
    transform: scale(2.0,2.0);
    transition: .20s transform;
  }
  .f:before, .f:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .f:after {
    clear: both;
  }
</style>

<style>
*{
  font-family: 'Roboto', sans-serif;
}
body{
  background: #ffffff;
}
</style>
<style type="text/css"> body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}
main {
  flex: 1 0 auto;
}</style>
<script type="text/javascript">
  $(".button-collapse").sideNav();
  $(document).ready(function(){
    $('.slider').slider();
  });

   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
     
</script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>