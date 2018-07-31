<?php
	include("conexao.php");

	$select = "SELECT titulo, autor, DATE_FORMAT(data,'%d/%m/%Y') as data, img, url,descricao FROM pagina ORDER BY id_pag DESC LIMIT 3";

	try{
		$stmt = $link->prepare($select);
		$stmt -> execute();
		$resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
		$contador = $stmt->rowCount();
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>
