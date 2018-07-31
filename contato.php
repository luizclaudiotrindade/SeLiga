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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    	<!--********************************************CONTATOS********************************************************-->
	    <div class="container">
	   		<h1 class="mt-4 mb-3">Contato</h1>
      		<ol class="breadcrumb">
		    	<li class="breadcrumb-item">
		    		<a href="index.html">Inicio</a>
			    </li>
			    <li class="breadcrumb-item active">Contatos</li>
		  	</ol>
      		<div class="row">
		    	<div class="col-lg-8 mb-4">
		      		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.881289757805!2d-35.0178574471217!3d-8.113568118415719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1d161a9c33d1%3A0x72dbe24edf957fff!2sSesi+Jaboat%C3%A3o!5e0!3m2!1sen!2sbr!4v1530762074043" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		    	</div>
		    	<div class="col-lg-4 mb-4">
		      		<h3>Detalhes</h3>
		      		<p>
				    	Av. Barão de Lucena, 251
				    	<br>Centro, Jaboatão dos Guararapes
				    	<br>PE, 54110-051
				    	<br>
				  	</p>
				  	<p>
				    	<abbr title="Phone">Telefone</abbr>: (81) 4002-8922
				  	</p>
				  	<p>
				    	<abbr title="Email">E-mail</abbr>:
				    	<a href="mailto:name@example.com">jaboatao.ifpe@jaboatao.ifpe.edu.br
				    	</a>
				  	</p>
				  	<p>
				    	<abbr title="Hours">Horário</abbr>: Segunda - Sábado: 13h às 22h
				  	</p>
		    	</div>
			</div>
			<!--************************************CONTATOS_MENSAGEM**************************************************-->
		  	<div class="row">
		    	<div class="col-lg-8 mb-4">
		      		<h3>Envie Sua Mensagem</h3>
		      		<form name="sentMessage" id="contactForm" action="PHP/mail.php" method="POST" novalidate>
		        		<div class="control-group form-group">
		          			<div class="controls">
		            			<label>Nome Completo:</label>
		            			<input type="text" class="form-control" id="name" name="nome" required>
		            			<p class="help-block"></p>
		          			</div>
		        		</div>
		        		<div class="control-group form-group">
		          			<div class="controls">
		            			<label>E-mail:</label>
		            			<input type="email" class="form-control" id="email" name="mail" required>
		          			</div>
		        		</div>
		        		<div class="control-group form-group">
		          			<div class="controls">
		            			<label>Assunto:</label>
		            			<input type="text" class="form-control" id="subject" name="assunto" required>
		          			</div>
		        		</div>
		        		<div class="control-group form-group">
		          			<div class="controls">
		            			<label>Mensagem:</label>
		            			<textarea rows="10" cols="100" class="form-control" id="message" name="mensagem" maxlength="999" style="resize:none"  required></textarea>
		          			</div>
		        		</div>
		        		<div id="success"></div>
		        			<button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
		      		</form>
		    	</div>
			</div>
		</div><!--FECHA A TAG CONTAINER-->
		<!--********************************************FOOTER*****************************************************-->
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
		<!--*********************************************************************************************************-->
		<script src="jquery/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/contact_me.js"></script>
  	</body>
</html>
