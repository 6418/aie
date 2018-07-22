<?php
	$url= $_POST['url'] = $_SERVER['HTTP_REFERER'];
	$name = stripslashes($_POST["name"]);
	$phone = stripslashes($_POST["phone"]);
	$email = stripslashes($_POST["email"]);
	$cargo = stripslashes($_POST["cargo"]);
	$empresa = stripslashes($_POST["empresa"]);
	$dest = "ventas2@pwp.com";
 
		require 'phpmailer/class.phpmailer.php';
		// Aqui definimos el asunto y armamos el cuerpo del mensaje
		$asunto = "Formulario PYME WEB";
		$cuerpo = "<strong>Enlace:</strong> ".$url."<br>";
		$cuerpo .= "<strong>Nombre:</strong> ".$name."<br>";
		$cuerpo .= "<strong>Plan:</strong> ".$cargo."<br>";
		$cuerpo .= "<strong>Teléfono:</strong> ".$phone."<br>";
		$cuerpo .= "<strong>Email:</strong> ".$email."<br>";
		$cuerpo .= "<strong>empresa:</strong> ".$empresa."<br>";

		$mail = new PHPMailer;
		$mail->Host = "localhost";
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->Subject = $asunto;
		$mail->addAddress($dest);
		$mail->MsgHTML($cuerpo);

		if($mail->Send()){
		    echo "mensaje enviado";
		}else{
			echo "mensaje NO enviado";
		}
?>