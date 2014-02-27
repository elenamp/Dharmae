<?php
/********CABECERA DE LA PÁGINA WEB***********/
function cabecera(){
	?>
    <div id="cabecera">
        <div id="logotipo"><a href="inicio.php"><img src="../img/logo.jpg" alt="Logo Dharmae"></a></div>
		<a href="http://www.facebook.com/terapiasdharmae" target="_blank"><img class="logofacebook" src="../img/icon/fb-icon.png" alt="Facebook" ></a>
        <div id="menu">
        <nav>
            <ul>
                <li><a href="inicio.php">Inicio</a></li>  
				<li><a href="quienessomos.php">Quiénes Somos</a></li>                      
                <li class="terapias"><a href="#">Terapias ↓</a>
                    <ul class="children">
						<li><a href="enfermeria.php">Enfermeria</a></li>
						<li><a href="osteopatiaestructural.php">Osteopat&iacute;a Estructural</a></li>
						<li><a href="acupunturaemocional.php">Acupuntura Emocional</a></li>
						<li><a href="acupunturaabdominal.php">Acupuntura Abdominal</a></li>
						<li><a href="auriculoterapia.php">Auriculoterapia</a></li>
						<li><a href="facioterapiavietnamita.php">Facioterapia Vietnamita</a></li>
						<li><a href="quiromasaje.php">Quiromasaje</a></li>
						<li><a href="drenajelinfatico.php">Drenaje Linf&aacute;tico</a></li>
                        <li><a href="paresmagneticos.php">Pares Magn&eacute;ticos</a></li>                        
                        <li><a href="homeopatia.php">Homeopat&iacute;a</a></li>                        
                        <li><a href="Reiki.php">Reiki</a></li>
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
	<p> © 2014 DAM Studios Copyright. All Rights Reserved.</p>
<?php }

function pieDePaginaInicio(){
	pieDePagina();
	?>
        <!-- inicio codigo contador -->       
            <img style="border: 0px solid ; margin-top: 10px; display: inline;"  alt="contador de visitas" 
	src="http://contador-de-visitas.com/hit.php?id=1951491&counter=42">        
        <!-- fin codigo contador -->

<?php }
?>