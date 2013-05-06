<?php session_start();?>
<!DOCTYPE html >
<html>
<?php include('box/head.php') ?>
<body>
     <style>
    body{
	margin:0;
	background-color: #f0f0f1;
	font-family:  arial;	
	font-size: 16px; 
	background:url(images/bg_people.jpg) 0 100px no-repeat;
	background-size: 110% ;
	}
	.aux{font-size: 10px; margin-top: 2.1em; margin-left: 6em;}
	.aux2{margin-top: -22px; margin-left: 150px;}
	.aux3{margin-top: -24px; margin-left: 60px;}
	.aux4{margin-left: -10px;}
	h2{font-weight:100; width: 250px;}
	@media screen and (max-width:1024px){
		.columna{ width:30%;} 
		body{ 
			background-size: 1024px ;
			} 
	} 

    </style>
<?php include('box/header.php') ?>	
<section class="contenedor">	
	<section class="content">
		<div class="people">

			<div class="columna aux">
				<?php include('box/search_people.php');?>
			</div>	
			<div class="columna">
				
						<h2>Nuestra Gente</h2>
				<div>		
					<p>Sed auctor nulla varius nibh tempor non tristique enim varius. Integer ipsum leo, rutrum eget molestie vitae,
				 aliquet suscipit erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				 	<p>Aenean id mi velit, vel euismod velit. Nulla sit amet leo in augue pharetra porttitor ut sit amet sem. 
				 		Cras tincidunt lacinia feugiat. </p>
				</div>
			</div>	
		</div> 
	</section>
</section>	
<?php $pagina='people'; include('box/footer.php') ?>
</body>
</html>
