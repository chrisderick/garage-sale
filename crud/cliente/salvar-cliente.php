<?php

	$nome = @$_REQUEST["nome_cliente"];
	$telefone = @$_REQUEST["telefone_cliente"];
	$endereco = @$_REQUEST["endereco_cliente"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO cliente (nome_cliente, telefone_cliente, endereco_cliente) VALUES ('$nome', '$telefone', '$endereco')";
			$res = $conn->query($sql);

			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrado com sucesso! Redirecionando<span id='wait'>.</span></div>";
				?>
				<script>
					var dots = window.setInterval( function() {
					var wait = document.getElementById("wait");
					if ( wait.innerHTML.length > 3 ) 
						wait.innerHTML = "";
					else 
						wait.innerHTML += ".";
					}, 100);
				</script>
				<?php
				header("refresh:3;url=index.php?page=lis-cliente");
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
		break;
		
		case "editar":
            $sql = "UPDATE cliente
                    SET nome_cliente='$nome', telefone_cliente='$telefone', endereco_cliente='$endereco'
                    WHERE id_cliente=".$_REQUEST["id_cliente"];
            $res = $conn->query($sql);

            if($res==true){
                print "<br><div class='alert alert-success'>Editado com sucesso! Redirecionando<span id='wait'>.</span></div>";
				?>
				<script>
					var dots = window.setInterval( function() {
					var wait = document.getElementById("wait");
					if ( wait.innerHTML.length > 3 ) 
						wait.innerHTML = "";
					else 
						wait.innerHTML += ".";
					}, 100);
				</script>
				<?php
				header("refresh:3;url=index.php?page=lis-cliente");
			}else{
                print "<br><div class='alert alert-danger'>Não foi possível editar!</div>";
            }
		break;
		
        //TODO: adicionar o setTimeout() do Javascript para redirecionar após o cadastro e o editar
		case "excluir":
            $sql = "DELETE FROM cliente WHERE cliente.id_cliente = ".$_REQUEST["id_cliente"];
            $res = $conn->query($sql);

            if($res==true){
                print "<br><div class='alert alert-success'>Excluído com sucesso! Redirecionando<span id='wait'>.</span></div>";
				?>
				<script>
					var dots = window.setInterval( function() {
					var wait = document.getElementById("wait");
					if ( wait.innerHTML.length > 3 ) 
						wait.innerHTML = "";
					else 
						wait.innerHTML += ".";
					}, 100);
				</script>
				<?php
				header("refresh:3;url=index.php?page=lis-cliente");
            }else{
                print "<br><div class='alert alert-danger'>Não foi possível excluir!</div>";
            }
		break;

		default:
			# code...
		break;
	}

?>