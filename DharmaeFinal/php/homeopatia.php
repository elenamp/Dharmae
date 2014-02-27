<?php require_once("funciones/headerAndFooter.php");
require_once("funciones/headTerapias.php");?>
<html>
    <head>
        <?php headTerapia("Homeopatía");?>
    </head>
    <body>
        <header>
            <?php cabecera(); ?>   
        </header>

        <div id="cuerpo"> 

            <div id="descripcionterapia">
                <img id="logoterapia" src="../img/Terapias/Homeopatia/homeopatialogo.png"/>             
                <div id="parrafo1">
                    <p>
                        Es una medicina alternativa surgida en el S.XVIII 
                        como alternativa más benigna a la que era la medicina tradicional de la época. <br>
                        Consiste en el empleo de preparados altamente diluidos que pretenden simular la patología del paciente, 
                        y de esta forma, se produce la mejora de la sintomatología. Su principio se basa en ‘lo similar cura lo similar’. 
                        <br><br>

                        En nuestra forma de trabajar, la homeopatía la utilizamos como método complementario
                        a cualquiera de nuestras otras terapias, siempre y cuando lo consideremos necesario. <br>
                        Es un excelente complemento.<br><br>
                    </p>
                </div>  

            </div>
            <div id="SliderTerapias">
			        <div class="flexslider">
			          <ul class="slides">
			            <li>
			  	    	    <a href="../img/Terapias/Homeopatia/homeopatia1.jpg" target="_blank">
								<img style="max-height: 200px;" src="../img/Terapias/Homeopatia/homeopatia1.jpg" alt="Imagen 1 homeopatia" />
							</a>
			  	    	</li>
			            <li>
			  	    	    <a href="../img/Terapias/Homeopatia/homeopatia2.jpg" target="_blank">
								<img style="max-height: 200px;" src="../img/Terapias/Homeopatia/homeopatia2.jpg" alt="Imagen 2 homeopatia" />
							</a>
			  	    	</li>
			            <li>
			  	    	    <a href="../img/Terapias/Homeopatia/homeopatia3.jpg" target="_blank">
								<img style="max-height: 200px;" src="../img/Terapias/Homeopatia/homeopatia3.jpg" alt="Imagen 3 homeopatia" />
							</a>
			  	    	</li>
			            <li>
			  	    	    <a href="../img/Terapias/Homeopatia/homeopatia4.jpg" target="_blank">
								<img style="max-height: 200px;" src="../img/Terapias/Homeopatia/homeopatia4.jpg" alt="Imagen 4 homeopatia" />
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