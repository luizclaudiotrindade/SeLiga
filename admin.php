<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Se Liga</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/modern-business.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/glyphicon.css" rel="stylesheet">
		<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
	</head>
	<body>
	    <h1 class="text-center text-danger">
	        <?php
				session_start();
				if(isset($_SESSION['LOGIN']) and isset($_SESSION['SENHA'])){
					header("Location: editar.php");
				}
		    	if(isset($_SESSION['LoginError']) and !empty($_SESSION['LoginError'])){
			        echo$_SESSION['LoginError'];
			        unset($_SESSION['LoginError']);
                }
	        ?>
	    </h1>
		<div class="d-flex justify-content-center">
			<div class="card">
			
			<div class="card-header">Login</div>
				<div class="card-body">
			
					<form id="my-form" method="POST" action="PHP/login.php">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="glyphicon glyphicon-user"></i>
								</span>
							</div>
							<input class="form-control" type="text" name="login" placeholder="Login"  required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="glyphicon glyphicon-lock"></i>
								</span>
							</div>
							<input class="form-control" type="password" name="senha" placeholder="Senha"  required>
				  		</div>
				  		<div class="d-flex flex-row-reverse">
							<button class="btn btn-primary" id="form-submit" type="submit">Entrar</button>&nbsp;&nbsp;
							<button class="btn btn-secondary" type="button">Voltar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

  		<script src="js/bootstrap.min.js"></script>
    	<script src="jquery/jquery.min.js"></script>
    	<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>
