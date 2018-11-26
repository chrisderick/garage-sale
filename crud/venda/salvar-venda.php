<?php

	$cliente = @$_REQUEST["cliente_id_cliente"];
	$item = @$_REQUEST["item_id_item"];
	$data = @$_REQUEST["data_venda"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO venda (cliente_id_cliente, item_id_item, data_venda) VALUES ('$cliente', '$item', '$data')";
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
				header("refresh:3;url=index.php?page=lis-venda");
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
		break;
		
		case "editar":
            $sql = "UPDATE venda
                    SET cliente_id_cliente='$cliente', item_id_item='$item', data_venda='$data'
                    WHERE id_venda=".$_REQUEST["id_venda"];
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
				header("refresh:3;url=index.php?page=lis-venda");
            }else{
                print "<br><div class='alert alert-danger'>Não foi possível editar!</div>";
            }
		break;

		case "excluir":
            $sql = "DELETE FROM venda WHERE venda.id_venda = ".$_REQUEST["id_venda"];
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
				header("refresh:3;url=index.php?page=lis-venda");
            }else{
                print "<br><div class='alert alert-danger'>Não foi possível excluir!</div>";
            }
		break;

		default:
			# code...
		break;
	}

?>