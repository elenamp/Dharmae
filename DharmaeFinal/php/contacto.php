<?php require_once("funciones/headerAndFooter.php");
	//Si hemos pulsado el botón de enviar
	if(isset($_POST['btnEnviar'])){
		//Si todos los campos requeridos han sido rellenos
		if($_POST['txtNombre']!="" && $_POST['txtEmail']!="" && $_POST['txtMensaje']!=""){
			$para = "caherfe@hotmail.com";
			$titulo = 'Mensaje de página Dharmae';
			$mensaje = $_POST['txtMensaje'];
			$cabeceras = 'From: =?UTF-8?B?'.base64_encode($_POST['txtNombre']).'?= <'.$_POST['txtEmail'].'>' . "\r\n" .
				'Reply-To: '.$_POST['txtEmail'].'' . "\r\n" .
				'X-Mailer: PHP/' . phpversion() .
				'Content-type: text/plain; charset=UTF-8' . "\r\n";

			if( mail($para, '=?UTF-8?B?'.base64_encode($titulo).'?=', $mensaje, $cabeceras) ) 
				header("Location: exito.php");
			else 
				header("Location: error.php");
		}
		else
			echo "no hay";
	}
	
	function mostrarValorCampo($NombreInput){
		if(isset($_POST[$NombreInput])) echo $_POST[$NombreInput];
	}
?>
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
				<div class="info_contacto">
					<p>
						<img src="../img/acupuntura emocional.jpg" alt="Acupuntura Emocional"/>
						C/Saavedra y Fajardo Nº100 2ºB (Salamanca)
					</p>
				</div>
				<div class="info_contacto">
					<p>
						<img src="../img/acupuntura emocional.jpg" alt="Acupuntura Emocional"/>
						osteopatia-acupuntura@hotmail.com
					</p>
				</div>
				<div class="info_contacto">
					<p>
						<img src="../img/acupuntura emocional.jpg" alt="Acupuntura Emocional"/>
						605535534
					</p>
				</div>							
			</div>
			<div class="dos_column_right_big">
				<!-- FORMULARIO DE CONTACTO -->	
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
						<!--<p class="submit">-->
							<input class="boton" type="submit" name="btnEnviar" value="Enviar"/>
							<!--<a href="javascript:void(0);" class="button white" onclick="$('.contact_form').submit();">Enviar</a>-->
						<!--</p>-->
					</fieldset>
				</form>
				<!-- FIN FORMULARIO DE CONTACTO --> 
			</div>          
        </div>
        
        <footer>
            <?php pieDePagina();?>
        </footer>
    </body>
</html>