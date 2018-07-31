<?php

	session_start();

	if(!empty($_POST['nome']) && !empty($_POST['email'])){

		include("conexao.php");
	    
		$nome = trim(strip_tags($_POST['nome']));
		$email = trim(strip_tags($_POST['email']));
	    
		$contador = "SELECT * FROM usuarios WHERE email = :email";
		$insert = "INSERT INTO usuarios(nome, email) VALUES(:nome, :email)";
	
		try{
			$stmt = $link->prepare($contador);
			$stmt -> bindParam(':email', $email, PDO::PARAM_STR);
			$stmt -> execute();
			$i = $stmt->rowCount();
			if($i==0){
				$stmt = $link->prepare($insert);
				$stmt -> bindParam(':nome', $nome, PDO::PARAM_STR);
				$stmt -> bindParam(':email', $email, PDO::PARAM_STR);
				$stmt -> execute();
				$_SESSION['CADASTRO'] = "<script>alert('CADASTRO EFETUADO COM SUCESSO!');</script>";
				header("Location: ../index.php");
			}else{
				$_SESSION['CADASTRO'] = "<script>alert('ERRO AO CADASTRAR!');</script>";
				header("Location: ../index.php");
			}
		}catch(PDOException $e){
			echo $e->getMessage();
		}   
	}else{
		$_SESSION['CADASTRO'] = "<script>alert('CAMPO VAZIO!');</script>";
		header("Location: ../index.php");
	}
?>
