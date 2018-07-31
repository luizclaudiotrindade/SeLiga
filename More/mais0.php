<?php
	session_start();
	if(!empty($_SESSION['CADASTRO'])){
		echo $_SESSION['CADASTRO'];
		unset($_SESSION['CADASTRO']);
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
  	<head>
		<title>Se Liga</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/blog-home.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/glyphicon.css" rel="stylesheet">
		<link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
	</head>
	<body>
  		<!--*****************************************BARRA_DE_NAVEGAÇÃO*************************************************-->
	   	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="../img/Micro_Logo.png" alt="Logo">
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			   		<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto" style="font-size:1.2em;">
						<li class="nav-item">
							<a class="nav-link" class="active" href="../index.php">Inicio</a>
						</li>
					   	<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target="#myModal" href="">Cadastro</a>
					   	</li>
					   	<li class="nav-item">
							<a class="nav-link" href="../contato.php">Contatos</a>
					   	</li>
					   	<li class="nav-item">
							<a class="nav-link" href="../Quem_Somos.php">Quem Somos?</a>
					   	</li>
					</ul>
        			<div class="col-md-5 col-md-offset-3">
            			<form class="search-form">
                			<div class="form-group">
								<input class="form-control" id="search" type="text" name="search" placeholder="Pesquisar...">
								<span class="glyphicon glyphicon-search form-control-feedback"></span>
            				</div>
            			</form>
        			</div>
				</div>
		  	</div>
    	</nav>
		<!--*********************************************BODY*************************************************-->

		<!-- Page Content -->
		<div class="container">

	

				<!-- Blog Entries Column -->
				

					<br>
					<hr>
					<br>
					<?php
						
						include("../PHP/pagSelect.php");
						
						for($i=0;$i<$contador;$i++){
					?>
					<!-- Blog Post -->
					<div class="card mb-4">
						<img class="card-img-top" src="../img/<?php echo $resultado[$i]['img']; ?>" alt="Card image cap">
						<div class="card-body">
							<h2 class="card-title"><?php echo $resultado[$i]['titulo'] ?></h2>
								<p class="card-text"><?php echo $resultado[$i]['descricao'] ?></p>
								<a href="<?php echo $resultado[$i]['url'] ?>" class="btn btn-primary">Read More &rarr;</a>
						</div>
						<div class="card-footer text-muted">
							<?php echo "Postado em ".$resultado[$i]['data']." por "?>
							<a href="#"><?php echo $resultado[$i]['autor']?></a>
						</div>
					</div>
					<?php
						}
					?>

					<!-- Pagination -->
					<ul class="pagination justify-content-center mb-4">
						<li class="page-item">
							<a class="page-link" href="mais2.html">&larr; Older</a>
						</li>
						<li class="page-item disabled">
							<a class="page-link" href="#">Newer &rarr;</a>
						</li>
					</ul>

				</div>

				
					
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->

		<!--******************************************FOOTER*******************************************************-->
    	<footer class="py-5 bg-dark">
      		<div class="container">
        		<p class="m-0 text-center text-white">Copyright &copy; Projeto Integrador 2018. Todos os direitos reservados.</p>
      		</div>
    	</footer>
		<!--********************************************MODAL*****************************************************-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
      		<div class="modal-dialog" role="document">
        		<div class="modal-content" id="modal-content">
        			<div class="modal-header  bg-dark">
        				<img src="../img/Logo.jpg" width="25%">
            			<button class="close text-white" type="button" data-dismiss="modal">
              				<span aria-hidden="true">×</span>
            			</button>
          			</div>
          			<div class="modal-body bg-dark">
						<form id="my-form" method="POST" action="../PHP/cadastro.php">
							<fieldset>
							<legend class="text-white" style="font-size:1.5em;">>Cadastro</legend>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="glyphicon glyphicon-user"></i>
										</span>
									</div>
									<input class="form-control form-control" type="text" name="nome" placeholder="Nome"  required>
								</div>
								<div class="input-group mb-3">
    								<div class="input-group-prepend">
      									<span class="input-group-text">@</span>
    								</div>
    								<input class="form-control form-control" type="email" name="email" placeholder="E-mail"  required>
  								</div>
  							</fieldset>
  							<br>
  							<div class="d-flex flex-row-reverse">
  								<button class="btn btn-primary" id="form-submit" type="submit">Cadastrar</button>&nbsp;&nbsp;
								<button class="btn btn-secondary" type="reset" data-dismiss="modal">Cancelar</button>
							</div>
						</form>
					</div>
        		</div>
      		</div>
		</div>
		<!--*************************************************************************************************************-->
		<script src="../js/bootstrap.min.js"></script>
		<script src="../jquery/jquery.min.js"></script>
		<script src="../js/bootstrap.bundle.min.js"></script>
	</body>
</html>
