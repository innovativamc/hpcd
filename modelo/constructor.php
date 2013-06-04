<?php require '../modelo/funcionesdb.php';
class constructor
{

// 


//retorna todos los eventos
function get_events()
	{ 
	$objBd=new modelo();
	$objBd->conectarBD();
	$objBd->consultarBD("select date, type, title, description, url from events"); 
	return $objBd;
	}

//retorna todos los eventos
function get_events_important($important)
	{ 
	$objBd=new modelo();
	$objBd->conectarBD();
	$objBd->consultarBD("select events.date, events.title, events.description, events.url, images.url from events, images where events.important=".$important." and events.id_images=images.id"); 
	return $objBd;
	}
//retorna el los prductos
function get_productos()
	{ 
	$objBd=new modelo();
	$objBd->conectarBD();
	$objBd->consultarBD("select * from productos ORDER BY id");
	
	while($fila=$objBd->obtenerResultado())
	{ ?>
<div class="set set1">
    <div class="title">
	<? echo utf8_encode($fila["titulo"]);?>
    </div>
    <div class="content">
    <div class="accord accordpading"> <span class="accordtext"><? echo utf8_encode($fila["sub_titulo"]);?></span><br /> 
	<? echo utf8_encode($fila["descripcion"]);?>
    
    <span class="vermas"><a target="_new" href="pandockcms/upload/<? echo utf8_encode($fila["pdf"]);?>"><img src="img/vermas.png" />Ver más...</a></span></div>
    <div class="accord"><img src="pandockcms/upload/<? echo utf8_encode($fila["imagen"]);?>" /></div></div>
</div>
	<? }

	$objBd->liberarConsulta();
	
	}	
	
	
//retorna el las sedes
function get_sedes()
	{ 
	$objBd=new modelo();
	$objBd->conectarBD();
	$objBd->consultarBD("SELECT * FROM sedes WHERE map_location!='' ORDER BY id");
	?><script type="application/javascript">
    		var url = new Array();
			url[0] = "";
      </script><?
	while($fila=$objBd->obtenerResultado())
	{ ?>
       <div class="punto_gris" style="margin:<? echo utf8_encode($fila["map_location"]);?>" 
       onmouseover="show('direccion<? echo utf8_encode($fila["id"]);?>'), show('detalle<? echo utf8_encode($fila["id"]);?>')" onmouseout="hide('direccion<? echo utf8_encode($fila["id"]);?>'), hide('detalle<? echo utf8_encode($fila["id"]);?>')">
       		<div id="direccion<? echo utf8_encode($fila["id"]);?>" class="punto_gris_detalle"><span class="naranja"><? echo utf8_encode($fila["sede"]);?></span><br />
<? echo utf8_encode($fila["direccion"]);?></div>
			<div id="detalle<? echo utf8_encode($fila["id"]);?>" class="box_punto_gris"></div>
            <script type="application/javascript">
			url[<? echo utf8_encode($fila["id"]);?>] = '<? echo utf8_encode($fila["googlemaps"]);?>'
			</script>
       </div>
	<? }

	$objBd->liberarConsulta();
	
	}		
//retorna la galeria
function get_galeria()
	{ 
	$objBd=new modelo();
	$objBd->conectarBD();
	$objBd->consultarBD("SELECT * FROM galeria ORDER BY id");
	while($fila=$objBd->obtenerResultado())
	{ ?>
       <a href="#"><img src="pandockcms/upload/<? echo utf8_encode($fila["imagen"]);?>" title="<? echo utf8_encode($fila["descripcion"]);?>" alt="<? echo utf8_encode($fila["descripcion"]);?>" /></a> 
	<? }

	$objBd->liberarConsulta();
	
	}	
//retorna las noticias
function get_noticias()
	{ 
	$objBd=new modelo();
	$objBd->conectarBD();
	$objBd->consultarBD("SELECT * FROM noticias ORDER BY id");
	while($fila=$objBd->obtenerResultado())
	{ ?>
					<li>

						<span><? echo utf8_encode($fila["titulo"]);?></span>
						<? if ($fila["imagen"]) {
							echo '<img class="ticker_img" src="pandockcms/upload/'.$fila["imagen"].'" />';
							echo utf8_encode(substr($fila["descripcion"],0,380)."...") ;
						}  else echo utf8_encode(substr($fila["descripcion"],0,510)."...") ;?>
						 	
					</li>
	<? }

	$objBd->liberarConsulta();
	
	}	
	
}   

  
?>