<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="UTF-8">
	    <title>E-mail</title>
	    <style>
		h1{
		    text-align:center;
		}
	    </style>
	</head>
	<body>
		<?php
			$nome = $_POST['nome']; 
			$sender = $_POST['mail'];
			$subject = $_POST['assunto'];
			$Message =  $_POST['mensagem'];

			$Message .= "\r\n$nome";
			$headers = "MIME-Version: 1.1\r\n";
			$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
			$headers .= "From: $sender\r\n"; // remetente
			$headers .= "Return-Path: projetopraticaintegrador@gmail.com\r\n"; // return-path
			$envio = mail("projetopraticaintegrador@gmail.com", $subject, $Message, $headers);
			 
			if($nome!=null && $sender!=null && $subject!=null && $Message!=null && $headers!=null){
			    if($envio)
				echo "<h1>Mensagem enviada com sucesso</h1>";
			    else
				echo "<h1>A mensagem não pode ser enviada</h1>";
			}else{
			    echo"<h1>Preencha todos os campos!</h1>";
			}
		?>
		<script>setTimeout(function(){location.href = "contato.html"},2000);</script>
	</body>
</html>

