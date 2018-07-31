<?php
    
	session_start();

	if(!empty($_POST['titulo']) && !empty($_POST['data']) && !empty($_POST['img']) && !empty($_POST['URL']) && !empty($_POST['descricao'])){
	    
	    include("conexao.php");
	    
		
	    $autor = $_SESSION['AUTOR'];
	    $titulo = trim(strip_tags($_POST['titulo']));
	    $data = strip_tags($_POST['data']);
	    $img = trim(strip_tags($_POST['img']));
		$url = "../News/".trim(strip_tags($_POST['URL']));
	    $descricao = trim(strip_tags($_POST['descricao']));
	    
		$data = explode("/", $data);
		
		$d = $data[0];
		$m = $data[1];
		$a = $data[2];

		$data = $a."/".$m."/".$d;
	    
	    $insert = "INSERT INTO pagina(titulo, autor, data, img, url, descricao) VALUES(:titulo, :autor, :data, :img, :url, :descricao)";
        
		try{
			$stmt = $link->prepare($insert);

			$stmt -> bindParam(':titulo', $titulo, PDO::PARAM_STR);
			$stmt -> bindParam(':autor', $autor, PDO::PARAM_STR);
			$stmt -> bindParam(':data', $data, PDO::PARAM_STR);
			$stmt -> bindParam(':img', $img, PDO::PARAM_STR);
			$stmt -> bindParam(':url', $url, PDO::PARAM_STR);
			$stmt -> bindParam(':descricao', $descricao, PDO::PARAM_STR);
			$stmt -> execute();

			$_SESSION['PAGINA'] = "PÁGINA CADASTRADA COM SUCESSO!";
	
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}else{
		$_SESSION['PAGINA'] = "CAMPO VAZIO!";
	}
	
	header("Location: ../editar.php");
	
?>
