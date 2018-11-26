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
			include("crud/item/cadastrar-item.php");
		break;
		case "lis-item":
			include("crud/item/listar-item.php");
		break;
		case "edit-item":
			include("crud/item/editar-item.php");
		break;
		case "sal-item":
			include("crud/item/salvar-item.php");
		break;

		//Cliente
		case "cad-cliente":
			include("crud/cliente/cadastrar-cliente.php");
		break;
		case "lis-cliente":
			include("crud/cliente/listar-cliente.php");
		break;
		case "edit-cliente":
			include("crud/cliente/editar-cliente.php");
		break;
		case "sal-cliente":
			include("crud/cliente/salvar-cliente.php");
		break;

		//Venda
		case "cad-venda":
			include("crud/venda/cadastrar-venda.php");
		break;
		case "lis-venda":
			include("crud/venda/listar-venda.php");
		break;
		case "edit-venda":
			include("crud/venda/editar-venda.php");
		break;
		case "sal-venda":
			include("crud/venda/salvar-venda.php");
		break;

		default:
			include("dashboard.php");
	}

?>