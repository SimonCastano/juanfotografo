<?php include('menu U.php'); ?>
<div class="row center ">
	<h2>Servicios y productos</h2>
	<div class="col s12 m3 ">
		<i class="material-icons">linked_camera</i>
		<p>Servicio de fotografia de eventos como : Bodas, Cumpleaños, Fiestas privadas, eventos publicos entre otros...</p>
	</div>
	<div class="col s12 m3 ">
		<i class="material-icons">photo_camera</i>
		<p>Creacion de logos corporativos, personales o para empresas, proyectos etc </p>
	</div>
	<div class="col s12 m3 ">
		<i class="material-icons">videocam</i>
		<p>Servicios de Edicion profecional  de videos y fotografias ,y restauracion de fotos antiguas</p>
	</div>
	<div class="col s12 m3 ">
		<i class="material-icons">book</i>
		<p>Creacion de books, albunes de bodas, cumpleaños, eventos y graduaciones</p>
	</div>
</div>
<style>
*{
	max-width: 100%;
}
html{
	box-sizing: border-box;
	background: #ffffff;			
}
body{
	margin:0;
}
.panels {
	min-height: 100vh;
	overflow: hidden;
	display: flex;
}
.panel{
	background: #ffffff
	box-shadow:inset 0 0 0 5px rgba(255, 255, 255, 0.1);
	color: white;
	text-align: center;
	align-items: center;
	transition: 
	font-size 1s 
	cubic-bezier(0.61,-0.19, 0.7, -0.11), 
	flex 1s cubic-bezier(0.61, -0.19, 0.7,-0.11), 
	background 1s;
	font-size: 15px;
	background-size: cover;
	background-position: center;
	justify-content: center;
	flex: 1;
	align-items: center;
	display: flex;
	flex-direction:column;
}
.panel1{ background-image:url(img/image3.jpg); max-width: 100%;}
.panel2{ background-image:url(img/image5.jpg);max-width: 100%; }
.panel5{ background-image:url(img/image16.jpg); max-width: 100%;}
.panel4{ background-image:url(img/image11.jpg); max-width: 100%;}
.panel > * {
	margin: 0;
	width: 100%;
	transition: transform 0.2s;
	flex: 1 0 auto;
	display:flex;
}
.panel > *: first-child {transform: translateY(-100%); ;}
.panel.opne-active > *: first-child {transform: translateY(0) ;}
.panel > *: last-child {transform: translateY(-100%); ;}
.panel.open-active > *: last-child {transform: translateY(0) ;}
.panel p {
	text-transform: uppercase;
	font-family: 'amatic sc', cursive;
	text-shadow:  0 0 4px rgba(0, 0, 0, 0.72), 0 0 14px rgba(0, 0, 0, 0.45);
	font-size: 2em;
	justify-content:center;
	align-items:center ;
}
.panel p: mth-child(2) {
	font-size:3em;
}
.panel.open {
	flex: 5;
	font-size:20px;
}
.cta
{
	color:white;
	text-decoration: none;
}
</style>
<div class="panels ">	
	<div class="panel panel1"  onmouseover="this.classList.toggle('open')">
		<p>Servicio</p>
		<p>fotografico</p>
		<p>En eventos</p>
	</div>
	<div class="panel panel5" onmouseover="this.classList.toggle('open');">
		<p>Filmacion</p>
		<p> y edicion </p>
		<p> de videos</p>
	</div>
	<div class="panel panel4" onmouseover="this.classList.toggle('open');">
		<p>books </p>
		<p>albunes</p>
		<p>edicion de fotos</p>
	</div>
</div>
<style>.diamante{
	display: inline-block;
	border-color: black black black black; 
	border-width: 0px 25px 25px  25px;
	height: 0;
	width: 50px;
	position: relative;
	margin: 20px 0 50px 0;
}
.diamante:after {
	content: "";
	position: absolute;
	top: 15px;
	left: -25px;
	width: 0;
	height: 0;
	border-style: solid;
	border-color: black transparent transparent transparent;
border-width: 50px 50px 0px 50px;</style>
<br><br>
<article  style="width: 80%;
background: rgba(0,0,0,0);
color: #000 ;
padding: 20px;
margin: 10% ; font-family: cursive;">
</article>
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