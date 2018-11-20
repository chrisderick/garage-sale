<?php
	//Conexão com o banco de dados
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'kapoper';

	$conn = new mysqli($host,$user,$pass,$db);

	//Includes das páginas
	switch(@$_REQUEST["page"]){
		//Idol
		case "cad-idol":
			include("idol/cadastrar-idol.php");
		break;
		case "lis-idol":
			include("idol/listar-idol.php");
		break;
		case "edit-idol":
			include("idol/editar-idol.php");
		break;
		case "sal-idol":
			include("idol/salvar-idol.php");
		break;

		//Grupo
		case "cad-grupo":
			include("grupo/cadastrar-grupo.php");
		break;
		case "lis-grupo":
			include("grupo/listar-grupo.php");
		break;
		case "edit-grupo":
			include("grupo/editar-grupo.php");
		break;
		case "sal-grupo":
			include("grupo/salvar-grupo.php");
		break;

		//Gravadora
		case "cad-gravadora":
			include("gravadora/cadastrar-gravadora.php");
		break;
		case "lis-gravadora":
			include("gravadora/listar-gravadora.php");
		break;
		case "edit-gravadora":
			include("gravadora/editar-gravadora.php");
		break;
		case "sal-gravadora":
			include("gravadora/salvar-gravadora.php");
		break;

		default:
			include("dashboard.php");
	}

?>