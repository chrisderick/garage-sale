<?php

	$nome = @$_REQUEST["nome_item"];
	$tipo = @$_REQUEST["tipo_item"];
	$preco = @$_REQUEST["preco_item"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO item (nome_item, tipo_item, preco_item) VALUES ('$nome', '$tipo', '$preco')";
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
				header("refresh:3;url=index.php?page=lis-item");
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
		break;
		
		case "editar":
            $sql = "UPDATE item
                    SET nome_item='$nome', tipo_item='$tipo', preco_item='$preco'
                    WHERE id_item=".$_REQUEST["id_item"];
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
				header("refresh:3;url=index.php?page=lis-item");
            }else{
                print "<br><div class='alert alert-danger'>Não foi possível editar!</div>";
            }
		break;

		case "excluir":
            $sql = "DELETE FROM item WHERE item.id_item = ".$_REQUEST["id_item"];
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
				header("refresh:3;url=index.php?page=lis-item");
            }else{
                print "<br><div class='alert alert-danger'>Não foi possível excluir!</div>";
            }
		break;

		default:
			# code...
		break;
	}

?>