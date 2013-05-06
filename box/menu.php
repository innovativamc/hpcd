<?php 

						if($_SESSION["profesionales"]=="abogados")

						{ 

							echo '	
<nav>
<section class="content">
			<ul><li style="margin-left:-30px;">
					<a href="">nosotros</a></li>
				<li><a href="">practicas</a></li>
				<li><a href="people.php">profesionales</a>
                	<ul>
                    <li><a href="people.php">abogados</a></li>
                    </ul>
                </li>
				<li><a href="">publicaciones</a></li>
				<li><a href="news.php">noticias</a></li>
				<li><a href="eventos.php">eventos</a></li>
				<li><a href="contact.php">contactenos</a></li>
			</ul>
</section>            
</nav>
		         ';}

		         if($_SESSION["profesionales"]=="asesores")

						{ 

							echo '	
<nav>
<section class="content">
			<ul><li style="margin-left:-30px;">
					<a href="">nosotros</a></li>
				<li><a href="">practicas</a></li>
				<li><a href="people.php">profesionales</a>
                	<ul>
                    <li><a href="people.php">asesores</a></li>
                    </ul>
                </li>
				<li><a href="">publicaciones</a></li>
				<li><a href="news.php">noticias</a></li>
				<li><a href="">legislacion</a></li>
				<li><a href="">servicios online</a></li>
				<li><a href="contact.php">contactenos</a></li>
			</ul>
</section>            
</nav>
		         ';}

?>