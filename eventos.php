<?php session_start(); ?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Syntax Highlighter --> 
<!-- Core CSS File. The CSS code needed to make eventCalendar works -->
<link rel="stylesheet" href="eventCalendar/css/eventCalendar.css">

<!-- Theme CSS file: it makes eventCalendar nicer -->
<link rel="stylesheet" href="eventCalendar/css/eventCalendar_theme_responsive.css"> 

<!-- flexslider css -->
<link rel="stylesheet" href="FlexSlider-Eventos/flexslider.css" type="text/css" media="screen" />

<style>
	body{
		margin:0;
		background-color: #404041;
		font-family:  arial;	
		font-size: 16px;  
		background:#fff; 
	}
</style>
<script src="js/prefixfree.min.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>	
<script src="js/functions.js"></script> <!-- 
<link rel="stylesheet" type="text/css" href="Slicebox/css/slicebox.css" />
<link rel="stylesheet" type="text/css" href="Slicebox/css/custom.css" />
<script type="text/javascript" src="Slicebox/js/modernizr.custom.46884.js"></script> -->
	<!--<script src="js/jquery.js" type="text/javascript"></script>-->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script> -->

<title>HPCD</title>
</head>
<body>
<?php include('box/header.php') ?>	
	<section class="contenedor">	
		<section class="option3top">
			<img src="images/eventos.png" width="100%" alt="">
		</section>
	 	<section class="eventoleft">
	 		<article class="eventogaleria">  
				<div class="flexslider">
				  <ul class="slides">
				     <? require_once("control/events.get.php"); 
				     	get_important_events();
				     ?>
				  </ul>
				</div>				    				 	 			 
	 		</article>
	 		 		<? get_normal_events();?>
	 	</section>
	 	<section class="eventoright">
				<div id="eventCalendarNoCache"></div>
				<script>
					$(document).ready(function() {
						$("#eventCalendarNoCache").eventCalendar({ 
							eventsjson: 'control/events.json.php',
  							eventsLimit: 0, 
  							dayNamesShort: [ 'S','M','T','W', 'T','F','S' ],
							cacheJson: false
						});
					});
				</script>

	 	</section>
	</section>
	<br />
	<br />
	<br />
</section>	
<?php $galeria=null; include('box/footer.php') ?>
<script src="eventCalendar/js/jquery.eventCalendar.js" type="text/javascript"></script>
 <!-- FlexSlider -->
  <script defer src="FlexSlider-Eventos/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide",
		    controlNav: false
		  });
		});  </script>
</body>
</html>
