<h1 class="text-center m-4">Lista de Vendas</h1>
<?php
	$sql = "SELECT * FROM venda
			INNER JOIN cliente ON cliente_id_cliente=id_cliente
            INNER JOIN item ON item_id_item=id_item";
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
				print "<th>#</th>";
				print "<th>Item</th>";
				print "<th>Cliente</th>";
				print "<th>Data da Venda</th>";
                print "<th>Ações</th>";
			print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
				print "<td>".$row["id_venda"]."</td>";
				print "<td>".$row["nome_item"]."</td>";
                print "<td>".$row["nome_cliente"]."</td>";
                print "<td>".date('d-m-Y', strtotime($row["data_venda"]))."</td>";
                    print "<td>
                                <button onclick=\"location.href='index.php?page=edit-venda&id_venda=".$row["id_venda"]."';\" class='btn btn-success'>Editar</button>
                                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-venda&acao=excluir&id_venda=".$row["id_venda"]."';}else{false;}\" class ='btn btn-danger'>Excluir</button>
                           </td>";
            print "</tr>";
		}
		print "</table>";
	}
	else{
		print "<br><div class='alert alert-danger'>Nenhum dado cadastrado!</div>";
	}
?>