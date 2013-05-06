<?php 
if ($_GET["profesionales"]=="")
	
		{     if($_SESSION['profesionales']=='') {$_SESSION['profesionales']='abogados'; } 

}else { $_SESSION['profesionales'] = $_GET["profesionales"]; }

?>
<header>
	<section>
		<a href="home.php"><img id="logo" src="images/logo.png" /></a>
		<div class="titulo">
			<p class="top"><a href="">Español</a> | <a href="">English</a> &nbsp; &nbsp; &nbsp; Propiedad intelectual / Abogados &nbsp; &nbsp; &nbsp; Bienvenido [HPCD Sing in / register]</p>
			<p class="middle">Bienvenido</p>
			<p class="bottom">Lorem ipsum dolor sit amet</p>
		</div>
	</section>
</header>