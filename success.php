<?php
	if (isset($_POST['inputKey1'])){
        $key01=htmlentities($_POST['inputKey1']);
        $key02=htmlentities($_POST['inputKey2']);
        $key03=htmlentities($_POST['inputKey3']);
        $key04=htmlentities($_POST['inputKey4']);
        $key05=htmlentities($_POST['inputKey5']);
        $url=htmlentities($_POST['inputUrl'])
		$email_client=htmlentities($_POST['intro-email']);
		

		
	/*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/
	$message = '';
	$message .= '<p>Hello, your message has been registered from the form</p> ';
    $message .= '<p>Keyword 1: '.$key01.'</p> ';
    $message .= '<p>Keyword 2: '.$key02.'</p> ';
    $message .= '<p>Keyword 3: '.$key03.'</p> ';
    $message .= '<p>Keyword 4: '.$key04.'</p> ';
    $message .= '<p>Keyword 5: '.$key05.'</p> ';
    $message .= '<p>Keyword 5: '.$url.'</p> ';
	$message .= '<p>Email: '.$email_client.'</p> ';
	
	
	

	
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=UTF-8\r\n";
	$header .= "From: ". $nombres . " <" . $email_client . ">\r\n";
	$email='';//Ingresa tu dirección de correo
	
			
	if (mail($email,$subject,$message,$header)){
		echo 'Your message has been sent';
	}	 else {
		echo 'Wow! your message could not be delivered  .';
	}
	/*FINALIZA RECOLECTANDO DATOS PARA FUNCION MAIL*/
	
	
	}
?>
