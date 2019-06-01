<?php 
include ('menu U.php');
?>
<h2 style="text-align: center;">¿Quieres saber quien soy?</h2>
<div class="row center">
  <div class="col s12 m6">
    <div class="card white black-text">
      <div class="card-content black-text hoverable ">
        <span class="card-title">Mision</span>
        <p>LLevar la mejor calidad con mis servicios a mis clientes prestando el servisio mas  servicial posible</p>
      </div>
    </div>
  </div>
  <div class="col s12 m6">
    <div class="card white black-text hoverable ">
      <div class="card-content black-text">
        <span class="card-title">Vision</span>
        <p>Ser el mejor fotografo de fotografia artistica de colombia y para el 2021 tener trabajos de talla internacional con mas trabajadores.</p>
      </div>
    </div>
  </div>
</div>
<div class="col s12 m8 offset-m2 l6 offset-l3 contenido">
  <div class="card-panel grey lighten-5 z-depth-1 ">
    <div class="row valign-wrapper ">
      <div class="col s10">
        <span class="black-text">
          Este soy yo
          
        </span>
      </div>
    </div>
  </div>
  <div class="row valign-wrapper ">
    <div class="col s2">
      <img src="img/juan4.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
    </div>
    <div class="col s10">
      <span class="black-text">
       Hola soy Juan david tabares Artista Grafico Experto en photografia y diseño 
      </span>
    </div>
  </div>
</div>
</div>
</body>
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