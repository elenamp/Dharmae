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
			<!-- START CONTACT FORM -->	
			<form action="#" class="contact_form">
			<p>
				<label for="name">Nombre <span>*</span></label>
				<input class="inputText" type="text" id="name" name="name" />
			</p>
			<div class="clear"></div>
			<p>
				<label for="email">E-mail <span>*</span></label>
				<input class="inputText" type="text" id="email" name="email" />
			</p>
			<div class="clear"></div>
			<p>
				<label for="message">Mensaje <span>*</span></label>
				<textarea class="inputTextarea" cols="88" rows="6" id="message" name="message"></textarea>
			</p>
			<div class="clear"></div>
			<p class="required_info"><span>*</span> Campos requeridos</p>
			<p class="submit">
				<a href="javascript:void(0);" class="button white" onclick="$('.contact_form').submit();">Enviar</a>
			</p>
			</form>
			<!-- END CONTACT FORM -->           
        </div>
        
        <footer>
            <?php pieDePagina();?>
        </footer>
    </body>
</html>