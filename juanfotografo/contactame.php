<?php include ('menu U.php'); ?>
<h4 class="center"> Ponte en contacto, espero tu mensaje</h4><br> 
<div class="row">
  <div class="col s12 m8">
    <div class="row">
      <form class="col s12  center" method="post" action="contactame.php">
        <div class="row">
          <div class="input-field col s12 m12">
            <i class="material-icons prefix">account_circle</i>
            <input placeholder="" id="first_name" type="text" name="name" class="validate">
            <label for="first_name">Pon aquí tu Nombre</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">contact_phone</i>
            <input id="password" type="number" class="validate" name="tel">
            <label for="number">Telefono</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">contact_mail</i>
            <input id="email" type="email" class="validate" name="email">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="icon_prefix2" class="materialize-textarea" name="msm"></textarea>
            <label for="icon_prefix2">Mensaje</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light center black white-text" type="submit" name="action">Enviar
          <i class="material-icons right">send</i>
        </button>
      </form>
      <?php
      include('config/conexion.php');
      error_reporting(0);
      $nom=$_POST['name'];
      $Telefono=$_POST['tel'];
      $email=$_POST['email'];
      $mensag=$_POST['msm'];
      $Fecha = date('D-m-y h:i:s');
      $guardar=$_POST['action'];
      if(isset($guardar)){
        $sql="INSERT INTO contacto VALUES ('','$nom',$Telefono,'$email','$mensag','$Fecha')";         
        if ($ejecutar=$conexion->query ($sql)){
          echo "<script>Materialize.toast(' GUARDADO CORRECTAMENTE', 3000, 'rounded green accent-3')
          </script>";
        }
        else{
          echo "<script>Materialize.toast('Error de guardado', 3000, 'rounded red accent-3')
          </script>";
        }
      } 
      ?>
    </div>
  </div>
  <div class="col s12 m4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54696.06255087392!2d-75.47718557420845!3d6.279796836377309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4426aedc749c1b%3A0x9eacd415c5a0e4c6!2sGuarne%2C+Antioquia!5e1!3m2!1ses!2sco!4v1525987174413" width="100%" height="450" frameborder="0"  >	
    </iframe>
  </div>
</div>
<div class="row center">
  <div class="col s12 m12 center ">
    <div class="card white black-text">
      <div class="card-content black-text">
        <span class="card-title">Info de contacto</span>
        <p>correo : tabaresriosjuandavid1@gmail.com - Direccion : 
        Guarne, Antioquia carretera medellin-bogota</p>
      </div>
      <div class="card-action">
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