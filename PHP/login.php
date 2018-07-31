<?php
	
	session_start();
	
	if(!empty($_POST['login']) && !empty($_POST['senha'])){

		include("conexao.php");

		$login = strtolower(trim(strip_tags($_POST['login'])));
		$senha = strtolower(trim(strip_tags($_POST['senha'])));
	 	$senha = md5($senha);

		$select = "SELECT * FROM adm WHERE login = :login and senha = :senha";
		try{
			$stmt = $link->prepare($select);
			$stmt -> bindParam(':login', $login, PDO::PARAM_STR);
			$stmt -> bindParam(':senha', $senha, PDO::PARAM_STR);
			$stmt -> execute();
			$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
			$contar = $stmt -> rowCount();
			if($contar>0){
				$_SESSION['ID'] = $resultado['id_adm'];
				$_SESSION['LOGIN'] = $resultado['login'];
				$_SESSION['SENHA'] = $resultado['senha'];
				$_SESSION['AUTOR'] = $resultado['nome'];
				header("Location: ../editar.php");
			}else{
				$_SESSION['LoginError'] = "INCORRETO!";
				header("Location: ../admin.php");
			}

		}catch(PDOException $e){
			echo $e->getMessage();
		}   
	}else{
		$_SESSION['LoginError'] = "CAMPO VAZIO!";
		header("Location: ../admin.php");
	}
?>
