<?php

require_once("../modelo/constructor.php");
header('Content-type: text/json');
$events=new constructor();
$objBd=$events->get_events(); 
$count=0; 
while ($row=$objBd->obtenerResultado()){
	$row[0] =  intval(strtotime($row[0]."+ 2 hours"))*1000;
	$arr[$count] = array('date' => "$row[0]", 'type' => "$row[1]", 'title' => "$row[2]", 'description' => "$row[3]", 'url' => "$row[4]");
	$count++;
	}
echo json_encode($arr); 	
	
?>