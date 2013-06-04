<?php
require_once("modelo/constructor.php");
	
function get_important_events(){	
	$events=new constructor();
	$objBd=$events->get_events_important(1); 
	while ($row=$objBd->obtenerResultado()){

		?>
		 <li> 
		    <div class="eventodescripciontop">
				<div class="eventotitle"><? echo utf8_encode($row[2]); ?></div>
				<div class="eventofecha"><? echo date("d/m/Y",strtotime($row[0])); ?></div>
			</div>
	        <img src="images/<? echo $row[4]; ?>" width="100%" />
	    </li>
		<?  
		}
}	

function get_normal_events(){
	$events=new constructor();
	$objBd=$events->get_events_important(0); 
	while ($row=$objBd->obtenerResultado()){

	?>
	<article class="articuloevento">
		<div class="eventodescripcion">
			<div class="eventotitle"><? echo utf8_encode($row[2]); ?></div>
			<div class="eventofecha"><? echo date("d/m/Y",strtotime($row[0])); ?></div>
		</div>
			<img src="images/<? echo $row[4]; ?>" alt=""/>
	</article>
		<?  
		}
}	
?>