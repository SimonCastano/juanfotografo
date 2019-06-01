<?php  session_start();
error_reporting(0);
if (empty($_SESSION['usuario'])) {
  header('location:panel_c.php');
}
?>
<?php include('menu A.php'); ?>
<style type="text/css">
body {
  background: url('img/943.jpg') ;
  background-size: 100% 100% ;
}
</style>
<section class="contenido white">
  <h4>AGREGAR IMAGEN NUEVA</h4>
  <form method="post" action="aD.Galeria.php" enctype="multipart/form-data">  
    <div class="row">
      <div class="file-field input-field col s12 m12">
        <div class="btn green">
          <span><i class="material-icons center">linked_camera</i></span>
          <input type="file" name="img" accept="image/*">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" >
        </div>
      </div>
    </div>
    <center><button type="submit" name="btnactualizar" class="waves-effect waves-light btn  green"><i class="material-icons left">security</i>Actualizar</button>
    </section>
    <?php   
    include('config/conexion.php');
    error_reporting(0);
    $namimage=$_FILES['img']['name'];
    $tmpimage=$_FILES['img']['tmp_name'];
    $extimage=pathinfo($namimage);
    $url = "img/".$namimage;
    $guardar=$_POST['btnactualizar'];
    if (isset($guardar)) {
      if (is_uploaded_file($tmpimage)) {
        if (($extimage['extension'] =="png")||($extimage['extension']=="jpg")) {
          copy($tmpimage, $url);
          $sql="INSERT INTO galeria VALUES('','$url')";
          if ($ejecutar = $conexion->query($sql)) {
            echo "<script>Materialize.toast(' IMAGEN CORRECTAMENTE GUARDADA', 6000, 'rounded green accent-3')
            </script>";
          } else{
            echo "<script>Materialize.toast(' IMAGEN NO SE A GUARDADO', 6000, 'rounded red accent-3')
            </script>";
          }
        }else{
          echo "<script>Materialize.toast(' error desconosido', 6000, 'rounded red accent-3')
          </script>";
        }
      }else{ 
        echo "<script>Materialize.toast(' Elija una imagen', 6000, 'rounded red accent-3')
        </script>";
      }
    }
    ?>
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
selectMonths: true,
selectYears: 15, 
today: 'Today',
clear: 'Clear',
close: 'Ok',
closeOnSelect: false 
});
</script>