<?php  session_start();
error_reporting(0);
if (empty($_SESSION['usuario'])) {
  header('location:panel_c.php');
}
?>
<?php include('menu A.php'); ?>
<style type="text/css">
body {
  background: url('img/rio.jpg') ;
  background-size: 100% 100% ;
}
</style>
<CENTER> <h2 class="white-text" style="background: rgba(0,0,0,0.6); width: 40%;" > NUEVOS MENSAJES</h2 >  </CENTER>
<form method="post" action="mensajes.php">
  <section class="contenido"  style="width: 75%;
  background: rgba(0,0,0,0.6);
  color: #fff ;
  font-family: cursive;0">
  <h4>Tus Mensajes</h4>
  <table class="bordered">
    <tr></tr><th>Nombre</th><th>Telefono</th><th>Email</th><th>Mensaje</th><th> Fecha</th><th>Responder</th></tr>
    <?php 
    include('config/conexion.php');
    $sql="SELECT * FROM contacto ORDER BY codigo desc";
    $ejecutar=$conexion->query($sql);
    while($filas=$ejecutar->fetch_row()){
      echo "<tr><td>$filas[1]</td><td>$filas[2]</td><td>$filas[3]</td><td>$filas[4]</td><td>$filas[5]</td>
      <td><a name='btnver' href='responder.php' class='btn waves-effect waves-light black'> Responder <i class='material-icons
      '>reply </i></a></td></tr>";
    }
    ?>
  </table>
</section> 
<script type="text/javascript">  var elem = document.querySelector('.modal');
var instance = M.Modal.init(elem, options);
$(document).ready(function(){
  $('.modal').modal();
});</script>
<br>  <br>  <br>    </center> 
</div>
</article>
</form>
<?php include('pie A.php') ?>
<script type="text/javascript">
// Show sideNa
$('.button-collapse').sideNav('show');
// Hide sideNav
$('.button-collapse').sideNav('hide');
// Destroy sideNav
$('.button-collapse').sideNav('destroy');</script>
<script type="text/javascript">    $(".button-collapse").sideNav();</script>
<?php 
$salir=$_POST['btnsalir'];
if (isset($salir)) {
  session_destroy();
  header('location:Cpanel.php');  
}
?>
<script type="text/javascript">$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 15, // Creates a dropdown of 15 years to control year,
today: 'Today',
clear: 'Clear',
close: 'Ok',
closeOnSelect: false // Close upon selecting a date,
});
</script>