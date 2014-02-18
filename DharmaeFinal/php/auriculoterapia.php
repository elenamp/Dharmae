<?php require_once("funciones/headerAndFooter.php");
require_once("funciones/headTerapias.php");?>
<html>
    <head>
        <?php headTerapia("Auriculoterapia");?>
    </head>
    <body>
        <header>
            <?php cabecera(); ?>   
        </header>

        <div id="cuerpo"> 

            <div id="descripcionterapia">
                <img id="logoterapia" src="../img/Terapias/Auriculoterapia/auriculoterapialogo.png"/>             
                <div id="parrafo1" >
                    <p>
                        Consiste en estimular los puntos reflejos que hay en la oreja, 
                        de manera que este estimulo active el sistema nervioso y 
                        mediante la vía refleja que une cada punto de la oreja 
                        con las distintas partes del cuerpo, se produzca una respuesta en nuestro  
                        organismo y este con sus propios recursos pueda  recuperar el equilibrio y la salud. 
                        <br><br>
                        Este método utilizado en China desde hace miles de años, muy eficaz en el control del dolor, 
                        la ansiedad que producen determinadas situaciones como regímenes alimenticios, 
                        abandono del tabaco o situaciones de stress…
                        <br><br>
                        La estimulación se puedes realizar de varias formas: 
                    <li>Masajeando los puntos </li>
                    <li>Agujas </li>
                    <li>Semillas </li>
                    <li>Imanes </li>
                    <br><br>


                    </p>
                </div>  

            </div>
            <div id="SliderTerapias">
			        <div class="flexslider">
			          <ul class="slides">
			            <li>
			  	    	    <a href="../img/Terapias/Auriculoterapia/auriculoterapia1.jpg" target="_blank">
								<img src="../img/Terapias/Auriculoterapia/auriculoterapia1.jpg" alt="Imagen 1 auriculoterapia" />
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