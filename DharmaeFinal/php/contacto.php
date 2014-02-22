<?php 
	require_once("funciones/headerAndFooter.php");
	require_once("funciones/sendEmail.php");
	enviarEmail();
?>
<html>
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../css/EstilosIndex.css">
		<link rel="shortcut icon" href="../img/icon/web-icon.png">
    </head>
    <body>
        <header>
            <?php cabecera();?>   
        </header>
        <div id="cuerpo"> 
			<div class="dos_column_left_small">
				<div class="info_contacto">
                                    <img class="imgContacto" src="../img/icon/blue-home-icon.png" alt="Acupuntura Emocional"/>
					<p>Dirección: </br> C/Saavedra y Fajardo Nº100 2ºB (Salamanca)</p>
				</div>
				<div class="info_contacto">
                                    <img class="imgContacto" src="../img/icon/blue-mail-icon.png" alt="Acupuntura Emocional"/>
					<p>E-mail: </br> osteopatia-acupuntura@hotmail.com</p>
				</div>
				<div class="info_contacto">
                                    <img class="imgContacto" src="../img/icon/blue-balloon-icon.png" alt="Acupuntura Emocional"/>
					<p>Telefono: </br> 605535534</p>
				</div>						
			</div>
			<div class="dos_column_right_big">
				<!-- FORMULARIO DE CONTACTO con validación HTML de campos requeridos y de formato de email-->	
				<form action="" id="formulario_contacto" method="post">
					<fieldset>
					    <legend>Formulario de contacto</legend>
						<p>
							<label for="nombre">Nombre <span>*</span></label><br/>
							<input class="inputText" type="text" name="txtNombre" value="<?=mostrarValorCampo('txtNombre'); ?>" required title="Se necesita un nombre" autofocus/>
						</p>
						<p>
							<label for="email">E-mail <span>*</span></label><br/>
							<input class="inputText" type="text" name="txtEmail" value="<?=mostrarValorCampo('txtEmail'); ?>" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title=" mail@ejemplo.com"/>
						</p>
						<p>
							<label for="mensaje">Mensaje <span>*</span></label><br/>
							<textarea class="inputTextarea" cols="88" rows="6" name="txtMensaje" required title="Se necesita un mensaje"><?php mostrarValorCampo('txtMensaje'); ?></textarea>
						</p>

						<p class="inf_requerida"><span>*</span> Campos requeridos</p>
						<input class="boton" type="submit" name="btnEnviar" value="Enviar"/>
					</fieldset>
				</form>
				<!-- FIN FORMULARIO DE CONTACTO --> 
			</div> 
			<div class="mapa_google">
                                <small>Ver <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=211477744403777284504.0004f2ad2ea79615f982f&amp;ie=UTF8&amp;t=h&amp;z=17&amp;source=embed" target="_blank">Av de Saavedra y Fajardo, 100</a> en un mapa más grande</small>
				<iframe width="100%" height="90%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=211477744403777284504.0004f2ad2ea79615f982f&amp;ie=UTF8&amp;t=h&amp;z=17&amp;output=embed">
                                
				</iframe>
				<br />
				
			</div>         
        </div>
        
        <footer>
            <?php pieDePagina();?>
        </footer>
    </body>
</html>