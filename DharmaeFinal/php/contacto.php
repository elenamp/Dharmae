<?php require_once("funciones/headerAndFooter.php");?>
<html>
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../css/EstilosIndex.css">
		<link type="text/css" rel="stylesheet" href="../css/contacto.css">
    </head>
    <body>
        <header>
            <?php cabecera();?>   
        </header>
        <div id="cuerpo"> 
			<div class="dos_column_left_small">
				<p>Dirección: Calle Saavedra y Fajardo Nº100 2ºB (Salamanca)</p>
				<p>Móvil: 605535534</p>
				<p>Email: osteopatia-acupuntura@hotmail.com</p>
								
			</div>
			<div class="dos_column_right_big">
				<!-- START CONTACT FORM -->	
				<form action="" id="formulario_contacto">
				<p>
					<label for="nombre">Nombre <span>*</span></label><br/>
					<input class="inputText" type="text" id="name" name="name" />
				</p>
				<p>
					<label for="email">E-mail <span>*</span></label><br/>
					<input class="inputText" type="text" id="email" name="email" />
				</p>
				<p>
					<label for="mensaje">Mensaje <span>*</span></label><br/>
					<textarea class="inputTextarea" cols="88" rows="6" id="message" name="message"></textarea>
				</p>

				<p class="inf_requerida"><span>*</span> Campos requeridos</p>
				<p class="submit">
					<a href="javascript:void(0);" class="button white" onclick="$('.contact_form').submit();">Enviar</a>
				</p>
				</form>
				<!-- END CONTACT FORM --> 
				
			</div>          
        </div>
        
        <footer>
            <?php pieDePagina();?>
        </footer>
    </body>
</html>