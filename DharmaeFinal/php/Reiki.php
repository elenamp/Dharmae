<?php require_once("funciones/headerAndFooter.php");?>
<html>
    <head>
        <title>Reiki</title>
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

		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide",
		    animationLoop: false,
		    itemWidth: 210,
		    itemMargin: 5
		  });
		});
		
      </script>
    </head>
    <body>
        <header>
            <?php cabecera();?>   
        </header>
        <div id="cuerpo"> 
            <div id="tituloterapia">
            REIKI
            </div>
            <div id="descripcionterapia">
	            <p>Partimos del concepto de que el ser humano es todo energía. 
	                El Reiki es un conocido sistema de relajación  y control del dolor, 
	                cada vez más aceptado  y utilizado en nuestra sociedad.  
	                Según esta creencia, el mal funcionamiento o bloqueo de uno o 
	                varios Chakras sería el que provoca o agrava el mal estado de 
	                salud dando lugar a enfermedades y trastornos.</p>
	            <p>Actualmente Reiki se emplea como terapia complementaria en 
	                algunos hospitales españoles como el Ramón  y Cajal  de Madrid, 
	                donde hacen un excelente trabajo con enfermos de cáncer,
	                y en muchos hospitales y  clínicas  de  EE.UU. e Inglaterra donde su empleo es habitual.
	                La unión de todas estas disciplinas puestas al cuidado de nuestro cuerpo y de nuestra salud, 
	                dan lugar a un sistema curativo eficaz y rápido, que todo aquel que lo prueba le resulta 
	                altamente satisfactorio. </p>
                   
            </div>
            <!--<div id="SliderTerapias">SLIDER DE FOTOS</div>-->
	        <div id="slider">
			
			        <div class="flexslider">
			          <ul class="slides">
			            <li>
			  	    	    <img src="../img/pares magneticos.jpg" alt="Pares Magneticos"/>
							<p class="flex-caption">Pares magnéticos</p>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/acupuntura emocional.jpg" alt="Acupuntura Emocional"/>
							<p class="flex-caption">Acupuntura emocional</p>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/auriculoterapia.jpg" alt="Auriculoterapia"/>
							<p class="flex-caption">Auriculoterapia</p>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/acupuntura abdominal.jpg" alt="Acupuntura Abdominal"/>
							<p class="flex-caption">Acupuntura abdominal</p>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/Homeopatia[1].jpg" alt="Homeopatia"/>
							<p class="flex-caption">Homeopatía</p>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/quiromasaje.jpg" alt="Quiromasaje"/>
							<p class="flex-caption">Quiromasaje</p>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/13-drenaje-linfatico[1].jpg" alt="Drenaje Linfatico" />
							<p class="flex-caption">Drenaje linfático</p>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/osteopatia.jpg" alt="Osteopatia"/>
							<p class="flex-caption">Osteopatía</p>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/reiki.jpg" alt="Reiki"/>
							<p class="flex-caption">Reiki</p>
			  	    	</li>
	                    <li>
	                        <img src="../img/facioterapia[1].jpg" alt="Facioterapia Vietnamita"/>
							<p class="flex-caption">Facioterapia Vietnamita</p>
			  	    	</li>
	                    <li>
	                        <img src="../img/enfermeria.jpeg" alt="Enfermeria"/>
							<p class="flex-caption">Enfermeria</p>
			  	    	</li>
			          </ul>
			        </div>
			          
	        </div>
         </div>
        <footer>
            <?php pieDePagina();?>
        </footer>
    </body>
</html>