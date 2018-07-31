<?php
	
	try{
		$link = new PDO('mysql:host=localhost;dbname=bd_seliga', "root", "root");
		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
    
?>
