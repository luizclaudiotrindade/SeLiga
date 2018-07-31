<?php
    
    session_start();
    
    if(!isset($_SESSION['ID'])){
        $_SESSION['LoginError'] = "CONEXÃO INVÁLIDA!";
        header("Location: admin.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
	<header>
		<title>Se Liga</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/modern-business.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/glyphicon.css" rel="stylesheet">
		<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
	</header>
	<body>
		<h2 class="text-center text-primary">
	        <?php
				echo "Bem vindo, ".$_SESSION['AUTOR']."!";
				if(isset($_SESSION['PAGINA'])){
					echo "<br>".$_SESSION['PAGINA'];
					unset($_SESSION['PAGINA']);
				}
	        ?>
	    </h2>
		<div class="d-flex justify-content-center">
			<div class="card">
				<div class="card-header">Criar Página</div>
					<div class="card-body">
						<form id="my-form" method="POST" action="PHP/pagCadastro.php">
							<div class="input-group mb-3">
								<input class="form-control" type="text" name="titulo" placeholder="Titulo" required>
							</div>
							<div class="input-group mb-3">
								<input class="form-control" type="text" name="data" maxlength="10" onkeypress="mascaraData(this)" placeholder="00/00/0000" required>
					  		</div>
							<div class="input-group mb-3">
								<input class="form-control" type="file" name="img" placeholder="Data" required>
					  		</div>
							<div class="input-group mb-3">
								<input class="form-control" type="text" name="URL" placeholder="url" required>
					  		</div>
							<div class="input-group mb-3">
								<textarea class="form-control" name="descricao" maxlength="264" cols="50" rows="5" style="resize: none" placeholder="Descrição..." required></textarea>
					  		</div>
					  		<div class="d-flex flex-row-reverse">
								<button class="btn btn-primary" id="form-submit" type="submit">Cadastrar</button>&nbsp;&nbsp;
								<button class="btn btn-secondary" type="button">Encerrar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

  		<script src="js/bootstrap.min.js"></script>
    	<script src="jquery/jquery.min.js"></script>
    	<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/mask.js"></script>
	</body>
</html>
