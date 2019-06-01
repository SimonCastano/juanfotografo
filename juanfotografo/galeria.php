<?php 
include ('menu U.php');
?>
<!-- <section class=" hide-on-small-only hide-on-med-only">
  <h3  style="text-align: center;">Fotos destacadas</h3>
  <div id="diapo">
    <div>
      <input type="radio" id="check_1" name="check" class="r_check" checked="checked">
      <label for="check_1" class="on_check">
        <img class="vignette" src="img/image1.jpg" alt="">
        <br><br><br>
      </label>
      <br><br><br><br><br><br>
      <img class="big_image" src="img/image1.jpg"  alt="">
    </div>
    <div>
      <input type="radio" id="check_2" name="check" class="r_check">
      <label for="check_2" class="on_check">
        <img class="vignette" src="img/image2.jpg" alt="">
        <br><br><br>
      </label>
      <br><br><br><br><br><br>
      <img class="big_image " src="img/image2.jpg" alt="">
    </div>
    <div>
      <input type="radio" id="check_3" name="check" class="r_check">
      <label for="check_3" class="on_check">
        <img class="vignette" src="img/image4.jpg" alt="">
        <br><br><br>
      </label>
      <br><br><br><br><br><br>
      <img class="big_image " src="img/image4.jpg"  alt="">
    </div>
    <div>
      <input type="radio" id="check_4" name="check" class="r_check">
      <label for="check_4" class="on_check">
        <img class="vignette" src="img/image7.jpg" alt="">
        <br><br><br>
      </label>
      <br><br><br><br><br><br>
      <img class="big_image " src="img/image7.jpg" alt="">
    </div>
    <div>
      <input type="radio" id="check_5" name="check" class="r_check  ">
      <label for="check_5" class="on_check">
        <img class="vignette" src="img/168.jpg" alt="">
        <br><br><br>
      </label>
      <br><br><br><br><br><br>
      <img class="big_image " src="img/168.jpg"  alt="">
    </div>
    <div>
      <input type="radio" id="check_6" name="check" class="r_check" checked="checked">
      <label for="check_6" class="on_check">
        <img class="vignette" src="img/image12.jpg" alt="">
        <br><br><br>
      </label>
      <br><br><br><br><br><br>
      <img class="big_image" src="img/image12.jpg" alt=""></div>
      <div>
        <input type="radio" id="check_7" name="check" class="r_check" checked="checked">
        <label for="check_7" class="on_check">
          <img class="vignette" src="img/image13.jpg" alt="">
          <br><br><br>
        </label>
        <br><br><br><br><br><br>
        <img class="big_image " src="img/image13.jpg"  alt="">
      </div>
      <div>
        <input type="radio" id="check_4" name="check" class="r_check">
        <label for="check_4" class="on_check">
          <img class="vignette" src="img/image7.jpg" alt="">
          <br><br><br>
        </label>
        <br><br><br><br><br><br>
        <img class="big_image " src="img/image7.jpg" alt="">
      </div>
      <div>
        <input type="radio" id="check_5" name="check" class="r_check  ">
        <label for="check_5" class="on_check">
          <img class="vignette" src="img/168.jpg" alt="">
          <br><br><br>
        </label>
        <br><br><br><br><br><br>
        <img class="big_image " src="img/168.jpg"  alt="">
      </div>
      <div>
        <input type="radio" id="check_6" name="check" class="r_check" checked="checked">
        <label for="check_6" class="on_check">
          <img class="vignette" src="img/image12.jpg" alt=""><br><br><br>
        </label>
        <br><br><br><br><br><br>
        <img class="big_image" src="img/image12.jpg" alt="">
      </div>
      <div>
        <input type="radio" id="check_7" name="check" class="r_check" checked="checked">
        <label for="check_7" class="on_check">
          <img class="vignette" src="img/image13.jpg" alt="">
          <br><br><br>
        </label>
        <br><br><br><br><br><br>
        <img class="big_image " src="img/image13.jpg"  alt="">
      </div>
    </div>
    <br><br><br><br><br><br><br><br>
  </section> -->
  <br>  <br>  
  <h3 style="text-align: center;">Galeria Completa</h3>
  <style>
    .container{
      width: 100%;
    }
  </style><section class="escritorio hide-on-small-only">
   <?php 
        include('config/conexion.php');
        $sql="SELECT * FROM galeria ORDER BY codigo desc";
        $ejecutar=$conexion->query($sql);
        echo "<div class='row hide-on-small-only'>";
        while ($filas=$ejecutar->fetch_row()) {
       echo
        "<div class='col s12 m4'>
        <div class='card'>
        <div class='card-image'>
          <img src='$filas[1]' >
          </div>
          </div>
          </div>";

        }
        echo '</div';
 ?>
 </section>
<section class="movil hide-on-large-only show-on-small">
      <?php 
        include('config/conexion.php');
        $sql1="SELECT * FROM galeria ORDER BY codigo desc";
        $ejecutar=$conexion->query($sql1);
        echo "<div class='row hide-on-large-only show-on-small'>";
        while ($filas=$ejecutar->fetch_row()) {
       echo
        "<div class='col s12 m4'>
        <div class=''>
    <img class='materialboxed' src='$filas[1]' style='width: 100%;' >
  </div><br>
          </div><br>";

        }
        echo '</div> <br>';

         ?>
         </section>

</div>

</div>

</div>
  </div>
  <br><br><br><br>
  <style>
    .container{
      display: grid;
      grid-template-columns:repeat(3,250px); 
      grid-gap: 5px;
      justify-content: center;
    }
    .item{
      border-radius: 5px;
      padding: 10px;
      background: #f2f2f2;
    }
    .item img{
      max-width: 100%;
    }
    .level-1{
  grid-row-end: span 1;
    }
    .level-2{
  grid-row-end: span 2;
    }
     .level-3{
  grid-row-end: span 3;
    }
    .gallery {
      width: 50%;
      margin: 0 auto;
      padding: 5px;
    }
    .gallery > div {
      position: relative;
      float: left;
      padding: 5px;
    }
    .gallery > div > img {
      display: block;
      width: 200px;
      transition: .20s transform;
      transform: translateZ(0); /* hack */
    }
    .gallery > div:hover {
      z-index: 1;
    }
    .gallery > div:hover > img {
      transform: scale(2.0,2.0);
      transition: .20s transform;
    }
    .cf:before, .cf:after {
      display: table;
      content: "";
      line-height: 0;
    }
    .cf:after {
      clear: both;
    }

</style>
</body>

<section class="right">
  <?php include ('footer U.php'); ?>
</section>
