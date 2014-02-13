<?php
/********CABECERA DE LA PÁGINA WEB***********/
function cabecera(){
	?>
    <div id="cabecera">
        <div id="logotipo"><img src="../img/logo.jpg" alt="Logo Dharmae"></div>
        <div id="menu">
        <nav>
            <ul>
                <li><a href="inicio.php">Inicio</a></li>                        
                <li><a href="#">Desplegable</a>
                    <ul class="children">
                        <li><a href="#">Pares Magn&eacute;ticos</a></li>                        
                        <li><a href="#">Acupuntura Emocional</a></li>
                        <li><a href="#">Auriculoterapia</a></li>
                        <li><a href="#">Acupuntura Abdominal</a></li>
                        <li><a href="#">Homeopat&iacute;a</a></li>                        
                        <li><a href="#">Quiromasaje</a></li>
                        <li><a href="#">Drenaje Linf&aacute;tico</a></li>
                        <li><a href="#">Osteopat&iacute;a Estructural</a></li>
                        <li><a href="#">Reiki</a></li>
                        <li><a href="#">Enfermeria</a></li>
                        <li><a href="#">Facioterapia Vietnamita</a></li>
                    </ul>
                </li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="Quienes">Quienes Somos</a></li>
            </ul>
        </nav> 
        </div>
    </div>
	<?php
}

/******PIE DE PÁGINA DE LA PÁGINA WEB***********/
function pieDePagina(){
	?>
	<p> © 2014 Luis "el del Luissenger" Studios Copyright :P. All Rights Reserved.</p>	
<?php }
?>