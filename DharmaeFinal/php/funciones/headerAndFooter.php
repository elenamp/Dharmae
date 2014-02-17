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
				<li><a href="Quienes">Quiénes Somos</a></li>                      
                <li><a href="#">Terapias ↓</a>
                    <ul class="children">
                        <li><a href="paresmagneticos.php">Pares Magn&eacute;ticos</a></li>                        
                        <li><a href="acupunturaemocional.php">Acupuntura Emocional</a></li>
                        <li><a href="auriculoterapia.php">Auriculoterapia</a></li>
                        <li><a href="acupunturaabdominal.php">Acupuntura Abdominal</a></li>
                        <li><a href="homeopatia.php">Homeopat&iacute;a</a></li>                        
                        <li><a href="quiromasaje.php">Quiromasaje</a></li>
                        <li><a href="drenajelinfatico.php">Drenaje Linf&aacute;tico</a></li>
                        <li><a href="osteopatiaestructural.php">Osteopat&iacute;a Estructural</a></li>
                        <li><a href="Reiki.php">Reiki</a></li>
                        <li><a href="enfermeria.php">Enfermeria</a></li>
                        <li><a href="facioterapiavietnamita.php">Facioterapia Vietnamita</a></li>
                    </ul>
                </li>
                <li><a href="contacto.php">Contacto</a></li>
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