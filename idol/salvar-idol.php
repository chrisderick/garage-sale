<?php

	$nome = @$_REQUEST["nome_idol"];
	$sexo = @$_REQUEST["sexo_idol"];
	$nasc = @$_REQUEST["nasc_idol"];
	$grupo = @$_REQUEST["grupo_id_grupo"];
	$rlabel = @$_REQUEST["gravadora_id_gravadora"];
	$posicao = @$_REQUEST["posicao_idol"];
	$solo = @$_REQUEST["solo_idol"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO idol (nome_idol, sexo_idol, nasc_idol, grupo_id_grupo, gravadora_id_gravadora, solo_idol, posicao_idol) VALUES ('$nome', '$sexo', '$nasc','$grupo','$rlabel', '$solo', '$posicao')";
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