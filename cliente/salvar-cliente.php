<?php

	$nome = @$_REQUEST["nome_cliente"];
	$sexo = @$_REQUEST["sexo_cliente"];
	$nasc = @$_REQUEST["nasc_cliente"];
	$grupo = @$_REQUEST["grupo_id_grupo"];
	$rlabel = @$_REQUEST["gravadora_id_gravadora"];
	$posicao = @$_REQUEST["posicao_cliente"];
	$solo = @$_REQUEST["solo_cliente"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO cliente (nome_cliente, sexo_cliente, nasc_cliente, grupo_id_grupo, gravadora_id_gravadora, solo_cliente, posicao_cliente) VALUES ('$nome', '$sexo', '$nasc','$grupo','$rlabel', '$solo', '$posicao')";
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