<?php require_once("funciones/headerAndFooter.php");
	//Si hemos pulsado el botón de enviar
	if(isset($_POST['btnEnviar'])){
		//Si todos los campos requeridos han sido rellenos
		
		/***************** COMPROBAR EMAIL ****************/
		if($_POST['txtNombre']!="" && $_POST['txtEmail']!="" && $_POST['txtMensaje']!=""){
			$para = "caherfe@hotmail.com";
			$titulo = 'Título';
			$mensaje = $_POST['txtMensaje'];
			$cabeceras = 'From: =?UTF-8?B?'.base64_encode($_POST['txtNombre']).'?= <'.$_POST['txtEmail'].'>' . "\r\n" .
				'Reply-To: '.$_POST['txtEmail'].'' . "\r\n" .
				'X-Mailer: PHP/' . phpversion() .
				'Content-type: text/plain; charset=UTF-8' . "\r\n";

			if( mail($para, '=?UTF-8?B?'.base64_encode($titulo).'?=', $mensaje, $cabeceras) ) //mete la funcion mail() en un if para comprobarla. si algo falla, nos devolverá "error". 
			{ 
			  echo 'Su Presupuesto fue enviado correctamente, nos pondremos en contacto con usted lo antes posible.';  
			} 
			else 
			{ 
			  echo "error"; 
			}  

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
				<p>Dirección: Calle Saavedra y Fajardo Nº100 2ºB (Salamanca)</p>
				<p>Móvil: 605535534</p>
				<p>Email: osteopatia-acupuntura@hotmail.com</p>
								
			</div>
			<div class="dos_column_right_big">
				<!-- FORMULARIO DE CONTACTO -->	
				<form action="" id="formulario_contacto" method="post">
					<fieldset>
					    <legend>Formulario de contacto</legend>
						<p>
							<label for="nombre">Nombre <span>*</span></label><br/>
							<input class="inputText" type="text" name="txtNombre" value="<?=mostrarValorCampo('txtNombre'); ?>"/>
						</p>
						<p>
							<label for="email">E-mail <span>*</span></label><br/>
							<input class="inputText" type="text" name="txtEmail" value="<?=mostrarValorCampo('txtEmail'); ?>"/>
						</p>
						<p>
							<label for="mensaje">Mensaje <span>*</span></label><br/>
							<textarea class="inputTextarea" cols="88" rows="6" name="txtMensaje"><?php mostrarValorCampo('txtMensaje'); ?></textarea>
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