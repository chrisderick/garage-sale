<?php
	//Conexão com o banco de dados
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'garage-sale';

	$conn = new mysqli($host,$user,$pass,$db);

	//Includes das páginas
	switch(@$_REQUEST["page"]){
		//Item
		case "cad-item":
			include("item/cadastrar-item.php");
		break;
		case "lis-item":
			include("item/listar-item.php");
		break;
		case "edit-item":
			include("item/editar-item.php");
		break;
		case "sal-item":
			include("item/salvar-item.php");
		break;

		//Cliente
		case "cad-cliente":
			include("cliente/cadastrar-cliente.php");
		break;
		case "lis-cliente":
			include("cliente/listar-cliente.php");
		break;
		case "edit-cliente":
			include("cliente/editar-cliente.php");
		break;
		case "sal-cliente":
			include("cliente/salvar-cliente.php");
		break;

		//Venda
		case "cad-venda":
			include("venda/cadastrar-venda.php");
		break;
		case "lis-venda":
			include("venda/listar-venda.php");
		break;
		case "edit-venda":
			include("venda/editar-venda.php");
		break;
		case "sal-venda":
			include("venda/salvar-venda.php");
		break;

		default:
			include("dashboard.php");
	}

?>