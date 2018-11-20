<?php

	$nome = @$_REQUEST["nome_gravadora"];
	$fund = @$_REQUEST["fundacao_gravadora"];
	$ceo = @$_REQUEST["ceo_gravadora"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO gravadora (nome_gravadora, fundacao_gravadora, ceo_gravadora) VALUES ('$nome','$fund','$ceo')";
			$res = $conn->query($sql);

			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
		break;
		
		case "editar":
			$sql = "UPDATE gravadora 
                    SET nome_gravadora = '$nome' 
                    WHERE id_gravadora=".$_REQUEST["id_gravadora"];
			$res = $conn->query($sql);

			if($res==true){
				print "<br><div class='alert alert-success'>Editado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
		break;

		case "excluir":
            $sql = "DELETE FROM gravadora WHERE id_gravadora=".$_REQUEST["id_gravadora"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso!');</script>";
                print "<script>location.href='index.php?page=lis-gravadora';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='index.php?page=lis-gravadora';</script>";
            }
		break;

		default:
			# code...
		break;
	}

?>