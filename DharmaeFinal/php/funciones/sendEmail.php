<?php 
/**********FUNCIÓN PARA ENVIAR EL EMAIL*******
Configuración:
	- $para -> email de destino
	- $tituo -> Asunto del mensaje a enviar
Enviará a ese destinatario y con ese asunto el mensaje introducido en el campo de texto txtEmail indicando
como remitente nombre (email) introducido en los campos correspondientes.
*/
function enviarEmail(){
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
	}
}
	
function mostrarValorCampo($NombreInput){
	if(isset($_POST[$NombreInput])) echo $_POST[$NombreInput];
}
?>