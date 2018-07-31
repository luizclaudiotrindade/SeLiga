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
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/modern-business.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/glyphicon.css" rel="stylesheet">
		
		<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
		
	</head>
	<body>
		<!--*****************************************BARRA_DE_NAVEGAÇÃO*************************************************-->
	   	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/Micro_Logo.png" alt="Logo">
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			   		<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto" style="font-size:1.2em;">
						<li class="nav-item">
							<a class="nav-link" class="active" href="index.php">Inicio</a>
						</li>
					   	<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target="#myModal" href="">Cadastro</a>
					   	</li>
					   	<li class="nav-item">
							<a class="nav-link" href="contato.php">Contatos</a>
					   	</li>
					   	<li class="nav-item">
							<a class="nav-link" href="Quem_Somos.php">Quem Somos?</a>
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
		<!--*********************************************CAROUSEL*************************************************-->
		<header>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					 <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<!--Imagens do carousel-->
		    	<div class="carousel-inner" role="listbox">
		      		<!--Imagem 1-->
				  	<div class="carousel-item active" style="background-image: url('img/marca_IFET_pernambuco_2.jpg')">
				    	<div class="carousel-caption d-none d-md-block">
				      		<h3>Fardamento</h3>
				      		<p>Alunos do campus Jaboatão recebem farda.</p>
				    	</div>
		      		</div>
		      		<!--Imagem 2-->
		      		<div class="carousel-item" style="background-image: url('img/imga.jpg')">
		        		<div class="carousel-caption d-none d-md-block">
		          			<h3>Second Slide</h3>
		          			<p>This is a description for the second slide.</p>
		        		</div>
		      		</div>
		      		<!--Imagem 3-->
		      		<div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
		        		<div class="carousel-caption d-none d-md-block">
		          			<h3>Third Slide</h3>
		          			<p>This is a description for the third slide.</p>
		        		</div>
		      		</div>
		    	</div>
		    	<!--Controlador do Carousel-->
		    	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		      		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		      		<span class="sr-only">Previous</span>
		    	</a>
		    	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		      		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		      		<span class="sr-only">Next</span>
		    	</a>
		  	</div>
		</header>
		<!--*********************************************RECENTES************************************************-->
		<div class="col-lg-6">
			<div class="card card-outline-secondary my-4">
		      	<div class="card-header">
		        	<h1>Recentes</h1>
		        </div>
		        <div class="card-body">
		       		<a href="News/fardamento.php">
					<p class="font-title">Fardamento Está Chegando!!!</p>
				</a>
		       		<small class="text-muted">Postado por Luiz em 03/01/2017</small>
		          	<hr>
		          	<p class="font-title">Monitores remunerados ganharão aumento</p>
		          	<small class="text-muted">Postado por Erik em 08/02/2017</small>
		          	<hr>
		          	<p class="font-title">Aberta inscrições para IFPE</p>
		          	<small class="text-muted">Postado por Gustavo em 09/07/2017</small>
		          	<hr>
		          	<p class="font-title">Curso tecnologo de redes estará disponivel esse ano</p>
		          	<small class="text-muted">Postado por Gabriel em 25/12/2017</small>
		          	<hr>
				<span style="text-align:right">
		          	<a href="More/mais0.php" class="btn btn-success">Ler mais...</a>
				</span>
		        </div>
		 	</div>
         </div>
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
        				<img src="img/Logo.jpg" width="25%">
            			<button class="close text-white" type="button" data-dismiss="modal">
              				<span aria-hidden="true">×</span>
            			</button>
          			</div>
          			<div class="modal-body bg-dark">
						<form id="my-form" method="POST" action="PHP/cadastro.php">
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
		
		
  		<script src="js/bootstrap.min.js"></script>
    	<script src="jquery/jquery.min.js"></script>
    	<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>
