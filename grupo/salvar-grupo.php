<?php

	$nome = @$_REQUEST["nome_grupo"];
	$tipo = @$_REQUEST["tipo_grupo"];
	$debut = @$_REQUEST["debut_grupo"];
	$disband = @$_REQUEST["disband_grupo"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO grupo (nome_grupo, tipo_grupo, debut_grupo, disband_grupo) VALUES ('$nome','$tipo','$debut','$disband')";
			$res = $conn->query($sql);

			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
		break;
		
		case "editar":
			# code...
		break;

		case "excluir":
			# code...
		break;

		default:
			# code...
		break;
	}

?>