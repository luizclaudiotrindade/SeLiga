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
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<title>Se Liga</title>
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<link href="../css/bootstrap.css" rel="stylesheet">
    	<link href="../css/blog-post.css" rel="stylesheet">
    	<link href="../css/style.css" rel="stylesheet">
		<link href="../css/glyphicon.css" rel="stylesheet">
		<link href="../img/logo.ico" rel="shortcut icon" type="image/x-icon">
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
		<!--*****************************************PÁGINA*************************************************-->
    	<div class="container">
			<!--**************************************POST**********************************************-->
			<br>
			<!-- Titulo -->
			<h1 class="mt-4">Fardamento Está Chegando!!!</h1>
			
			<!-- Autor -->
			<p class="lead">
				por
				<a href="#">Luiz Claudio</a>
			</p>
			
			<hr>					
			
			<!-- Date/Time -->
			<p>Postado em 01 Jan 2018 as 12:00 PM</p>
			
			<hr>
			<!--*********************************************CAROUSEL*************************************************-->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<!--Imagens do carousel-->
				<div class="carousel-inner">
					<!--Imagem 1-->
					<div class="carousel-item active">
						<img class="d-block w-100" src="../img/gasolina.png" alt="First slide">
					</div>
					<!--Imagem 2-->
					<div class="carousel-item">
						<img class="d-block w-100" src="../img/dolar.jpg" alt="Second slide">
					</div>
					<!--Imagem 3-->
					<div class="carousel-item">
						<img class="d-block w-100" src="../img/cambio.jpg" alt="Third slide">
					</div>
				</div>
				<!--Controlador do Carousel-->
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Proximo</span>
				</a>
			</div>
			<div class="row">
			<div class="col-lg-8">
			<hr>
			<!--***********************************CONTEÚDO_DA_PÁGINA*****************************************-->
		  	<p class="lead">Após a pertinente insistência do alunos da turma de informática para internet do 2º período, uma luz no fim do tunel está a brilhar.</p>

			<p>Hoje(06/07/18) ás 10h, foi comunicado que o fardamento já está a caminho do campus, segundo informações, o fardamento teria atrasado devido a greve dos caminhoneiros.</p>
				  	
			<blockquote class="blockquote">
				<p class="mb-0"><i>"Queridos, bom dia! Fiz um novo contato com a empresa que está responsável em confeccionar o fardamento dos estudantes. Eles mandaram um novo e-mail hoje informando que as camisas já estão a caminho. Argumentaram que a greve dos caminhoneiros atrasou o processo. Mais novidades informo pra vocês. Bom final de semana."</i></p>
				<footer class="blockquote-footer">
		      		<cite title="Source Title">Evellyn</cite>
		      	</footer>
			</blockquote>
				  	
			<p>Será que depois de 1 período e meio os alunos de informática para internet do 2º período irão mesmo receber o fardamento? só o tempo dirá.</p>
			<p>Bem amiguinhos, não deixe de ficar por dentro de todas as informações que estão rolando no campus, cadastre seu E-mail para ficar sempre atualizado.</p>
		  	<hr>
				  	
			<!-- ******************************COMENTÁRIOS************************************** -->
			<div class="card my-4">
				<h5 class="card-header">Deixe Seu Comentário:</h5>
				<div class="card-body">
					<div class="fb-comments" data-href="https://wwwtesteppcom.000webhostapp.com/News/fardamento.html" data-numposts="5"></div>
					<div id="fb-root"></div>
		    	</div>
			</div>
			<!-- *************************************************EVENTOS******************************************** -->
			</div>
			<div class="col-lg-4">
			<div class="card my-4">
				<h5 class="card-header">Eventos</h5>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6">
							<ul class="list-unstyled mb-0">
								<li>
									<a href="#"><h6>Formatura Dos Veteranos</h6></a>
								</li>
								<li>
									<a href="#"><h6>Bolão da copa IFPE</h6></a>
								</li>
								<li>
									<a href="#"><h6>Evento de Artes</h6></a>
								</li>
							</ul>
						</div>
						<div class="col-lg-6">
							<ul class="list-unstyled mb-0">
								<li>
									<a href="#"><h6>JavaScript</h6></a>
								</li>
								<li>
									<a href="#"><h6>CSS<h6></a>
								</li>
								<li>
									<a href="#"><h6>Tutorials</h6></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- **********************************************RECENTES***************************************** -->
			<div class="card my-4">
				<h5 class="card-header">Recentes</h5>
				<div class="card-body">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  		<div class="carousel-inner">
							<div class="carousel-item active">
					  			<img class="d-block w-100" src="../img/imagem1.jpg" alt="Anuncio Recente--1">
							</div>
							<div class="carousel-item">
					  			<img class="d-block w-100" src="../img/imagem2.jpg" alt="Anuncio Recente--2">
							</div>
							<div class="carousel-item">
					  			<img class="d-block w-100" src="../img/imagem3.jpg" alt="Anuncio Recente--3">
							</div>
				  		</div>
				  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
				  		</a>
				  		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		<!-- ************************************************FOOTER************************************************** -->
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
		<!--*********************************************************************************************************-->
		<script src="../js/script.js"></script>
		<script src="../jquery/jquery.min.js"></script>
		<script src="../js/bootstrap.bundle.min.js"></script>	
  	</body>
</html>
