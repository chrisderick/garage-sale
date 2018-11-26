<?php

	$nome = @$_REQUEST["nome_venda"];
	$sexo = @$_REQUEST["sexo_venda"];
	$nasc = @$_REQUEST["nasc_venda"];
	$grupo = @$_REQUEST["grupo_id_grupo"];
	$rlabel = @$_REQUEST["gravadora_id_gravadora"];
	$posicao = @$_REQUEST["posicao_venda"];
	$solo = @$_REQUEST["solo_venda"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO venda (nome_venda, sexo_venda, nasc_venda, grupo_id_grupo, gravadora_id_gravadora, solo_venda, posicao_venda) VALUES ('$nome', '$sexo', '$nasc','$grupo','$rlabel', '$solo', '$posicao')";
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