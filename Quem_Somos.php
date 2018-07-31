<?php
	session_start();
	if(!empty($_SESSION['CADASTRO'])){
		echo $_SESSION['CADASTRO'];
		unset($_SESSION['CADASTRO']);
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Se Liga</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/resume.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/glyphicon.css" rel="stylesheet">

		<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
		<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	</head>
	<body id="page-top">
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
    	<!--**********************************************INTEGRANTES**************************************************************-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="sideNav">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#Erik">Erik Bittencourt</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#Gustavo">Gustavo Macêdo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#Gabriel">Gabriel Neves</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#Luiz">Luiz Claudio</a>
					</li>
				</ul>
			</div>
		</nav>
		<!--***********************************************************************************************************************-->
		<div id="Pad">
			<div class="container-fluid p-0">
				<section class="resume-section p-3 p-lg-5 d-flex d-column" id="Erik">
					<div class="my-auto">
						<h1 class="mb-0">Erik
							<span class="text-primary">Bittencourt</span>
						</h1>
						<div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
							<a href="#">name@email.com</a>
						</div>
						<p class="mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
						<ul class="list-inline list-social-icons mb-0">
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-github fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</section>
				<section class="resume-section p-3 p-lg-5 d-flex d-column" id="Gustavo">
					<div class="my-auto">
						<h1 class="mb-0">Gustavo
							<span class="text-primary">Macêdo</span>
						</h1>
						<div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
							<a href="#">name@email.com</a>
						</div>
						<p class="mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
						<ul class="list-inline list-social-icons mb-0">
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-github fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</section>
				<section class="resume-section p-3 p-lg-5 d-flex d-column" id="Gabriel">
					<div class="my-auto">
						<h1 class="mb-0">Gabriel
							<span class="text-primary">Neves</span>
						</h1>
						<div class="subheading mb-5">Av. Aníbal Cardoso Nº30 · Cabo de Santo Agostinho, PE · (81) 9 8527-5725 ·
							<a href="#">Gabryelneves9@gmail.com</a>
						</div>
						<p class="mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
						<ul class="list-inline list-social-icons mb-0">
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-github fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</section>
				<section class="resume-section p-3 p-lg-5 d-flex d-column" id="Luiz">
					<div class="my-auto">
						<h1 class="mb-0">Luiz
							<span class="text-primary">Claudio</span>
						</h1>
						<div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
							<a href="#">name@email.com</a>
						</div>
						<p class="mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
						<ul class="list-inline list-social-icons mb-0">
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-github fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</section>
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
									<input class="form-control form-control" type="text" name="nome" placeholder="Nome">
								</div>
								<div class="input-group mb-3">
    								<div class="input-group-prepend">
      									<span class="input-group-text">@</span>
    								</div>
    								<input type="email" name="email" class="form-control" placeholder="E-mail">
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
		<script src="jquery/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="jquery-easing/jquery.easing.min.js"></script>
		<script src="js/resume.min.js"></script>
	</body>
</html>
