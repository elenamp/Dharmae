<?php require_once("funciones/headerAndFooter.php");
require_once("funciones/headTerapias.php");?>
<html>
    <head>
        <?php headTerapia("Acupuntura Abdominal");?>
    </head>
    <body>
        <header>
            <?php cabecera(); ?>   
        </header>

        <div id="cuerpo"> 

            <div id="descripcionterapia">
                <img id="logoterapia" src="../img/Terapias/AcupunturaAbdominal/acupunturaabdominallogo.png"/>             
                <div id="parrafo1" ALIGN=left>
                    <p>
                        Es un tipo de acupuntura zonal, en la que se puntura en la zona del abdomen, 
                        siendo esta una zona casi indolora y con efectos muy  inmediatos en el tratamiento.
                        <br><br>
                        Las patologías en las que pueden estar indicadas sobre todo son musculotendinosas:
                    <li>Ciáticas, dolor cervical, epicondilitis (codo de tenista), lumbalgia, tortícolis, 
                        síndrome de túnel carpiano, artrosis y artritis. </li>
                    <br><br>
                    </p>
                </div>  

            </div>
            <div id="SliderTerapias">
			        <div class="flexslider">
			          <ul class="slides">
  			            <li>
  			  	    	    <a href="../img/Terapias/AcupunturaAbdominal/acupunturaabdominal1.jpg" target="_blank">
  								<img src="../img/Terapias/AcupunturaAbdominal/acupunturaabdominal1.jpg" alt="Imagen 1 acupuntura abdominal" />
  							</a>
  			  	    	</li>
			          </ul>
			        </div>
			          
	        </div>
        </div>
        <footer>
            <?php pieDePagina(); ?>
        </footer>
    </body>
</html>