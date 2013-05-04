<form action='people_select.php' method="post" name="search_people" id="search_people">
					<div>
						<input type='search' value='search' id='search' size='30'> 
						<p class='aux2'><img src="images/search.png"></p>
					</div>
					<h2> A | B | C | D | E | F | G | H | I <BR/>
						J | K | L | M | N | Ñ | O | P | Q <BR/> 
						<a href="people_select.php">R</a> | S | T | U | V | W | X | Y | Z | todos 
					</h2>
						<p>
							<select maxlength="50">
		  						<option value="0">Seleccione Sector</option>
		  						<option value="0" >Seleccione una Practica</option>
							</select>
						</p>
					<p>
						<select maxlength="50">

						<?php 

						if($_SESSION["profesionales"]=="abogados")

						{ 

							echo '	
	  						<option value="0">Seleccione una Practica</option>
	  						<option value="1">Contratos, Fusiones y Adquisiciones</option>
	  						<option value="2">Energía, Recursos Naturales, Servicios Básicos y Concesiones</option>
	  						<option value="3">Telecomunicaciones, Tecnología de la Información y Comercio Electrónico</option>
	  						<option value="4">Comercio Internacional, Inversiones, Banca, Finanzas, Competencia, Régimen Control
Cambiario</option>
	  						<option value="5">Derecho Laboral y Seguridad Social</option>
	  						<option value="6">Litigios y Medios Alternos de Solución de Controversias</option>

	  						<option value="7">Inmobiliario</option>
	  						<option value="8">Industria Farmacéutica / Salud</option>
	  						<option value="9">Tributario</option>
	  						<option value="10">Derecho Público</option> '; 
	  					}
	  					if($_SESSION["profesionales"]=="asesores")

						{ 

							echo '	
	  						<option value="0">Seleccione un Servicio</option>
	  						<option value="1">Asesoría General</option>
	  						<option value="2">Patentes</option>
	  						<option value="3">Marcas</option>
	  						<option value="4">Derechos de Autor</option>
	  						<option value="5">Análisis de Protección Múltiple</option>
	  						<option value="6">Nombres de Dominio</option>
							<option value="7">Registro Sanitario</option>
	  						<option value="8">Cambios en Marcas y Patentes</option>
	  						<option value="9">Licencias y Transferencia Tecnológica</option>
	  						<option value="10">Protección contra Competencia Desleal</option>
	  						<option value="11">Medios Alternos de Solución de Controversias y Litigios</option> '; 
	  					}	?>

						</select>
					</p>
					<p>
						<select maxlength="50">
	  						<option value="0">Seleccione Lugar</option>
	  						<option value="0">Seleccione una Practica</option>
						</select>
					</p>
					<div class='aux4'><img src="images/send.png"><p class='aux3'>reset ></p></div>
				</form>