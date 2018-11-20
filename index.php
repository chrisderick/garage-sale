<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<!-- Meta tags obrigatórias (Charset e visualizãção mobile first) -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="css/bootstrap.min.css">

		<title>KaPOPer</title>
	</head>

	<body>
		<!-- Barra de Navegação -->
		<nav class="navbar center navbar-expand-lg navbar-light" style="background-color: #CAF9F4">
			<a class="navbar-brand" href="index.php">KaPOPer </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
			</button>

  			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    			<div class="navbar-nav mr-auto">
			      <div class="nav-item dropdown">
			      <a class="nav-item nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
			      	<div class="dropdown-menu" aria-labelledby="DropdownMenu">
		              <a class="dropdown-item" href="index.php?page=cad-idol">Idol</a>
		              <a class="dropdown-item" href="index.php?page=cad-grupo">Grupo</a>
		              <a class="dropdown-item" href="index.php?page=cad-gravadora">Gravadora</a>
		            </div>
		         </div>	
			      <div class="nav-item dropdown">
			      <a class="nav-item nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listar</a>
			      	<div class="dropdown-menu" aria-labelledby="DropdownMenu">
		              <a class="dropdown-item" href="index.php?page=lis-idol">Idols</a>
		              <a class="dropdown-item" href="index.php?page=lis-grupo">Grupos</a>
		              <a class="dropdown-item" href="index.php?page=lis-gravadora">Gravadoras</a>
		            </div>
		         </div>
    			</div>
  			</div>
		</nav>

		<!-- Incluir navegação -->
		<div class="container">
	      <div class="row">
	        <div class="col-lg-12">
	          <?php
	            include("config.php");
	          ?>
	        </div>
	      </div>
    	</div>    

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
