<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<!-- Meta tags obrigatórias (Charset e visualizãção mobile first) -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="css/bootstrap.min.css">

		<title>GarageSale</title>
	</head>

	<body>
		<!-- Barra de Navegação -->
		<nav class="navbar center navbar-expand-lg navbar-light" style="background-color: #92f9ba">
			<a class="navbar-brand" href="index.php">GarageSale </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
			</button>

  			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    			<div class="navbar-nav mr-auto">
			      <div class="nav-item dropdown">
			      <a class="nav-item nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
			      	<div class="dropdown-menu" aria-labelledby="DropdownMenu">
		              <a class="dropdown-item" href="index.php?page=cad-item">Item</a>
		              <a class="dropdown-item" href="index.php?page=cad-cliente">Cliente</a>
		              <a class="dropdown-item" href="index.php?page=cad-venda">Venda</a>
		            </div>
		         </div>	
			      <div class="nav-item dropdown">
			      <a class="nav-item nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listar</a>
			      	<div class="dropdown-menu" aria-labelledby="DropdownMenu">
		              <a class="dropdown-item" href="index.php?page=lis-item">Item</a>
		              <a class="dropdown-item" href="index.php?page=lis-cliente">Cliente</a>
		              <a class="dropdown-item" href="index.php?page=lis-venda">Venda</a>
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
