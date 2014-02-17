<?php require_once("funciones/headerAndFooter.php");?>
<html>
    <head>
        <title>Reiki</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
	    <!-- Slider CSS -->
		<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
        <link type="text/css" rel="stylesheet" href="../css/EstilosIndex.css">
	    
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
            
            <div id="descripcionterapia">
                  <img id="logoterapia" src="../img/Terapias/Reiki/reikilogo.png"/>             
            <div id="parrafo1">
	            <p  ALIGN=left>Partimos del concepto de que el ser humano es todo energía. 
	                El Reiki es un conocido sistema de relajación  y control del dolor, 
	                cada vez más aceptado  y utilizado en nuestra sociedad.  
	                Según esta creencia, el mal funcionamiento o bloqueo de uno o 
	                varios Chakras sería el que provoca o agrava el mal estado de 
	                salud dando lugar a enfermedades y trastornos.</p>
	            <HR align="CENTER" size="2" width="95%" color="Black" noshade>
                    <p ALIGN=left>Actualmente Reiki se emplea como terapia complementaria en 
	                algunos hospitales españoles como el Ramón  y Cajal  de Madrid, 
	                donde hacen un excelente trabajo con enfermos de cáncer,
	                y en muchos hospitales y  clínicas  de  EE.UU. e Inglaterra donde su empleo es habitual.
	                La unión de todas estas disciplinas puestas al cuidado de nuestro cuerpo y de nuestra salud, 
	                dan lugar a un sistema curativo eficaz y rápido, que todo aquel que lo prueba le resulta 
	                altamente satisfactorio. </p>
                 </div>  
                   
            </div>
            <div id="SliderTerapias">
			        <div class="flexslider">
			          <ul class="slides">
			            <li>
			  	    	    <img src="../img/pares magneticos.jpg" alt="Pares Magneticos"/>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/acupuntura emocional.jpg" alt="Acupuntura Emocional"/>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/auriculoterapia.jpg" alt="Auriculoterapia"/>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/acupuntura abdominal.jpg" alt="Acupuntura Abdominal"/>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/Homeopatia[1].jpg" alt="Homeopatia"/>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/quiromasaje.jpg" alt="Quiromasaje"/>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/13-drenaje-linfatico[1].jpg" alt="Drenaje Linfatico" />
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/osteopatia.jpg" alt="Osteopatia"/>
			  	    	</li>
			  	    	<li>
			  	    	    <img src="../img/reiki.jpg" alt="Reiki"/>
			  	    	</li>
	                    <li>
	                        <img src="../img/facioterapia[1].jpg" alt="Facioterapia Vietnamita"/>
			  	    	</li>
	                    <li>
	                        <img src="../img/enfermeria.jpeg" alt="Enfermeria"/>
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