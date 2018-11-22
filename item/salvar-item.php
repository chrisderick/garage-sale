<?php

	$nome = @$_REQUEST["nome_item"];
	$sexo = @$_REQUEST["sexo_item"];
	$nasc = @$_REQUEST["nasc_item"];
	$grupo = @$_REQUEST["grupo_id_grupo"];
	$rlabel = @$_REQUEST["gravadora_id_gravadora"];
	$posicao = @$_REQUEST["posicao_item"];
	$solo = @$_REQUEST["solo_item"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO item (nome_item, sexo_item, nasc_item, grupo_id_grupo, gravadora_id_gravadora, solo_item, posicao_item) VALUES ('$nome', '$sexo', '$nasc','$grupo','$rlabel', '$solo', '$posicao')";
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