<?php require_once("funciones/headerAndFooter.php");?>
<html>
    <head>
        <title>Dharmae Enfermeria y Terapias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../css/EstilosIndex.css">
        	    <!-- Slider CSS -->
	  	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
	      <!-- jQuery -->
	      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	      <!-- FlexSlider -->
	      <script src="../js/jquery.flexslider.js"></script>

	      <script type="text/javascript">
	        $(function(){
	          SyntaxHighlighter.all();
	        });
	
	    	// Can also be used with $(document).ready()
	    	$(window).load(function() {
	    	  $('.flexslider').flexslider({
	    	    animation: "slide"
	    	  });
	    	});
	      </script>
    </head>
    <body>
        <header>
            <?php cabecera();?>   
        </header>
        <div id="slider">
			
		        <div class="flexslider">
		          <ul class="slides">
		            <li>
						<a href="paresmagneticos.php" target="_blank">
		  	    	    	<img src="../img/Terapias/ParesMagneticos/paresmagneticos1.jpg" alt="Pares Magneticos"/>
						</a>
						<p class="flex-caption">Pares magnéticos</p>
						
		  	    	</li>
		  	    	<li>
		  	    	    <img src="../img/Terapias/AcupunturaEmocional/acupunturaemocional1.jpg" alt="Acupuntura Emocional"/>
						<p class="flex-caption">Acupuntura emocional</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="../img/Terapias/Auriculoterapia/auriculoterapia1.jpg" alt="Auriculoterapia"/>
						<p class="flex-caption">Auriculoterapia</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="../img/Terapias/AcupunturaAbdominal/acupunturaabdominal1.jpg" alt="Acupuntura Abdominal"/>
						<p class="flex-caption">Acupuntura abdominal</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="../img/Terapias/Homeopatia/homeopatia1.jpg" alt="Homeopatia"/>
						<p class="flex-caption">Homeopatía</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="../img/Terapias/Quiromasaje/quiromasaje1.jpg" alt="Quiromasaje"/>
						<p class="flex-caption">Quiromasaje</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="../img/Terapias/DrenajeLinfatico/drenajelinfatico1.jpg" alt="Drenaje Linfatico" />
						<p class="flex-caption">Drenaje linfático</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="../img/Terapias/Osteopatia/osteopatia1.jpg" alt="Osteopatia"/>
						<p class="flex-caption">Osteopatía</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="../img/Terapias/Reiki/reiki1.jpg" alt="Reiki"/>
						<p class="flex-caption">Reiki</p>
		  	    	</li>
                    <li>
                        <img src="../img/Terapias/FacioterapiaVietnamita/facioterapiavietnamita1.jpg" alt="Facioterapia Vietnamita"/>
						<p class="flex-caption">Facioterapia Vietnamita</p>
		  	    	</li>
                    <li>
                        <img src="../img/Terapias/Enfermeria/enfermeria1.jpeg" alt="Enfermeria"/>
						<p class="flex-caption">Enfermeria</p>
		  	    	</li>
		          </ul>
		        </div>
			          
        </div>
        <div id="cuerpo"> 
            <div id="Contenido1">
                <div id="titulo"><p>Enfermeria</p></div>
                <div id="foto"><a href="enfermeria.php"><img src="../img/Terapias/Enfermeria/enfermeria1.jpeg" alt="Enfermeria" title="Enfermeria"></a></div>
                <div id="descripcion">Restauracion del Ph normal de nuestro organismo que impide el crecimiento de virus y bacterias .  </div>
                <p><a href="">Leer mas...</a></p>                
            </div>
            <div id="Contenido1">
                <div id="titulo"><p>Facioterapia Vietnamita</p></div>
                <div id="foto"><a href="facioterapiavietnamita.php"><img src="../img/Terapias/FacioterapiaVietnamita/facioterapiavietnamita1.jpg" alt="Facioterapia" title="Facioterapia"></a></div>
                <div id="descripcion">Restauracion del Ph normal de nuestro organismo que impide el crecimiento de virus y bacterias .  </div>
                <p><a href="">Leer mas...</a></p>                
            </div>
             <div id="Contenido1">
                <div id="titulo"><p>Pares Magneticos</p></div>
                <div id="foto"><a href="paresmagneticos.php"><img src="../img/Terapias/ParesMagneticos/paresmagneticos1.jpg" alt="Pares Magnéticos" title="Pares Magnéticos"></a></div>
                <div id="descripcion">Restauracion del Ph normal de nuestro organismo que impide el crecimiento de virus y bacterias .  </div>
                <p><a href="">Leer mas...</a></p>                
            </div>
            
            <div id="Contenido1">
                <div id="titulo"><p>Acupuntura Emocional</p></div>
                <div id="foto"><a href="acupunturaemocional.php"><img src="../img/Terapias/AcupunturaEmocional/acupunturaemocional1.jpg" alt="Acupuntura Emocional" title="Acupuntura Emocional"></a></div>
                <div id="descripcion">La solución a la depresión, la apatía, la ansiedad esta en esta terapia.</div>
                <p><a href="">Leer mas...</a></p>                
            </div>
            
            <div id="Contenido1">
                <div id="titulo"><p>Auriculoterapia</p></div>
                <div id="foto"><a href="auriculoterapia.php"><img src="../img/Terapias/Auriculoterapia/auriculoterapia1.jpg" alt="Auriculoterapia" title="Auriculoterapia"></a></div>
                <div id="descripcion">La estimulación de  puntos de la oreja nos proporciona salud y equilibrio.</div>
                <p><a href="">Leer mas...</a></p>                
            </div>
            
            <div id="Contenido1">
                <div id="titulo"><p>Acupuntura abdominal</p></div>
                <div id="foto"><a href="acupunturaabdominal.php"><img src="../img/Terapias/AcupunturaAbdominal/acupunturaabdominal1.jpg" alt="Acupuntura Abdominal" title="Acupuntura Abdominal"></a></div>
                <div id="descripcion">Indolora y de efectos inmediatos, acaba con los dolores.</div>
                <p><a href="">Leer mas...</a></p>                
            </div>
                        
            <div id="Contenido1">
                <div id="titulo"><p>Homeopatia</p></div>
                <div id="foto"><a href="homeopatia.php"><img src="../img/Terapias/Homeopatia/homeopatia1.jpg" alt="Homeopatia" title="Homeopatia"></a></div>
                <div id="descripcion">El complemento ideal a nuestras terapias.</div>
                <p><a href="">Leer mas...</a></p>                
            </div>
            
            <div id="Contenido1">
                <div id="titulo"><p>Quiromasaje </p></div>
                <div id="foto"><a href="quiromasaje.php"><img src="../img/Terapias/Quiromasaje/quiromasaje1.jpg" alt="Quiromasaje" title="Quiromasaje"></a></div>
                <div id="descripcion">¿Seguro que no te apetece un buen masaje?</div>
                <p><a href="">Leer mas...</a></p>                
            </div>
            
            <div id="Contenido1">
                <div id="titulo"><p>Drenaje Linfatico</p></div>
                <div id="foto"><a href="drenajelinfatico.php"><img src="../img/Terapias/DrenajeLinfatico/drenajelinfatico1.jpg" alt="Drenaje Linfático" title="Drenaje Linfático"></a></div>
                <div id="descripcion">El empujon que necesita tu cuerpo para eliminar toxinas y liquidos .</div>
                <p><a href="">Leer mas...</a></p>                
            </div>
            
            <div id="Contenido1">
                <div id="titulo"><p>Osteopatía estructural</p></div>
                <div id="foto"><a href="osteopatiaestructural.php"><img src="../img/Terapias/Osteopatia/osteopatia1.jpg" alt="Osteopatia" title="Osteopatia"></a></div>
                <div id="descripcion">Recupera la movilidad y acaba con tus dolores. </div>
                <p><a href="">Leer mas...</a></p>                
            </div>
            
            <div id="Contenido1">
                <div id="titulo"><p>Reiki</p></div>
                <div id="foto"><a href="Reiki.php"><img src="../img/Terapias/Reiki/reiki1.jpg" alt="Reiki" title="Reiki"></a></div>
                <div id="descripcion">Devuelvele a tu cuerpo la energía que le robas dia a dia .</div>
                <p><a href="">Leer mas...</a></p>                
            </div>
                        
        </div>
        
        <footer>
            <?php pieDePagina();?>
        </footer>
    </body>
</html>