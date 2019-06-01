<?php 
include ('menu U.php');
?>
<br class=""><br class=""><br class="hide-on-large-only">
<center>  </center>  
<div class="parallax-container center"><br><br><br><br><br>  
  <img src="img/firma_b.png" class="Firma hide-on-small-only" >
  <img src="img/firma_b.png" class="Firma hide-on-large-only" width="100%">
  <div class="parallax"><img class="" src="img/943.jpg" style="filter: blur(3px);"></div>
</div>
<div class="section white center">
  <div class="row ">
    <h2  class="header">HOLA!! este es mi sitio de </h2>
    <p class="grey-text text-darken-3 lighten-3"> fotografiá profesional y diseño gráfico publicitario <div class="divider"></div> <br>Aquí podrás contactarme, seguirme en mis redes sociales, ver mis trabajos, fotos, galerías, videos y publicaciones en general.   <span  class="icon-camera"></span> =) </p><br><br>
    <div class="divider"></div>
  </div>
</div>
<div class="slider ">
  <ul class="slides">
    <li>
      <img src="img/image8.jpg" > <!-- random image -->
      <div class="caption center-align">
        <h3>Fotos nuevas!</h3>
        <h5 class="light grey-text text-lighten-3">fotografiás personales matrimonios foto estudios etc...</h5>
      </div>
    </li>
    <li>
      <img src="img/image15.jpg"> <!-- random image -->
      <div class="caption center-align">
        <h3>Edición profesional</h3>
        <h5 class="light grey-text text-lighten-3">arreglos profesionales para modelajes y momentos especiales</h5>
      </div>
    </li>
    <li>
      <img src="img/image12.jpg"> <!-- random image -->
      <div class="caption center-align">
        <h3>Edición profesional</h3>
        <h5 class="light grey-text text-lighten-3">arreglos profesionales para modelajes y momentos especiales</h5>
      </div>
    </li>
  </ul>
</div>
</div>
<br><br><br>
</div>
</div>
<div class="parallax-container contenido"><br><br><br><br><br>  
  <h2 class="center contenido hoverable index white-text " style=" font: bold 100%;">Diseño </h2>
  <div class="parallax"><img class="" src="img/image2.jpg"></div>
</div>
<br>
<section class="contenido grey hide-on-small-only">
  <div class="col s8 m8 offset-m2 l6 offset-l3 ">
    <div class="card-panel grey lighten-5 z-depth-1 ">
      <div class="row valign-wrapper ">
        <div class="col s2">
          <img src="img/juan2.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
        </div>
        <div class="col s10">
          <span class="black-text center">
            Hola me llamo juan David tabares Rios soy fotografo profecional naci el 21 de agosto de 1985 en rionegro antioquia <br><br>"SOY UN JOVEN CON UN PASADO NORMAL PERO CON UN PRESENTE Y FUTURO SIN PRESEDENTES NO QUEDA SOMBRA DE LO QUE YO ERA JESUS ME SALVÓ. SOY MUSICO, Y ME DEDICO A LA FOTOGRAFÍA Y DISEÑO GRÁFICO ABARCANDO VARIOS CAMPOS. CON APTITUDES MUY GRANDES EN AUDIOVISUALES".
          </span>
        </div>
      </div>
    </div>
    <a href="quien_soy.php" class="waves-effect waves-light btn pulse white black-text">conoseme un poco mas</a>
  </div>
</section>
<section class="show-on-small hide-on-large-only">
  <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="img/juan1.jpg" class="circle">
          <span class="card-title">Juan David Tabares</span>
        </div>
        <div class="card-content">
          <p>Hola me llamo juan David tabares Rios soy fotografo profecional naci el 21 de agosto de 1985 en rionegro antioquia <br><br>"SOY UN JOVEN CON UN PASADO NORMAL PERO CON UN PRESENTE Y FUTURO SIN PRESEDENTES NO QUEDA SOMBRA DE LO QUE YO ERA JESUS ME SALVÓ. SOY MUSICO, Y ME DEDICO A LA FOTOGRAFÍA Y DISEÑO GRÁFICO ABARCANDO VARIOS CAMPOS. CON APTITUDES MUY GRANDES EN AUDIOVISUALES".</p>
        </div>
        <div class="card-action">
          <a href="quien_soy.php" class="waves-effect waves-light btn pulse white black-text">conoseme un poco mas</a>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.parallax').parallax();
  });
</script>
<script>
  const panels = document.querySelectorAll('.panel');
  function toggleOpen() {
    this.classList.toggle('open');
  }
  function toggleActive(e) {
    if (e.propertyName.includes('flex')) {
      this.classList.toggle('open-active');
    }
  }
  panels.forEach(panel => panel.addEventListener('click',toggleOpen));
  panels.forEach(panel => panel.addEventListener('transitionend',toggleActive));
</script>
<?php include ('footer u.php'); ?>