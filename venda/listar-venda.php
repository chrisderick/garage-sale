<h1 class="text-center m-4">Lista de Vendas</h1>
<?php
	$sql = "SELECT * FROM venda
			INNER JOIN grupo ON grupo_id_grupo=id_grupo
            INNER JOIN gravadora ON gravadora_id_gravadora=id_gravadora";
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
				print "<th>#</th>";
				print "<th>Nome do(a) Venda</th>";
				print "<th>Sexo</th>";
				print "<th>Nascimento</th>";
				print "<th>Grupo</th>";
				print "<th>Gravadora</th>";
				print "<th>Posição</th>";
				print "<th>Artista solo?</th>";
				print "<th>Ações</th>";
			print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
				print "<td>".$row["id_venda"]."</td>";
				print "<td>".$row["nome_venda"]."</td>";
				if($row["sexo_venda"] == 1){
                print "<td>Masculino</td>";
            }elseif($row["sexo_venda"] == 0){
                print "<td>Feminino</td>";
            }
				print "<td>".date('d-m-Y', strtotime($row["nasc_venda"]))."</td>";
				print "<td>".$row["nome_grupo"]."</td>";
				print "<td>".$row["nome_gravadora"]."</td>";
				print "<td>".$row["posicao_venda"]."</td>";
				if($row["solo_venda"] == 1){
                print "<td>Sim</td>";
				}elseif($row["solo_venda"] == 0){
                print "<td>Não</td>";
				}
				print "<td>
							<button onclick=\"location.href='index.php?page=edit-venda&id_venda=".$row["id_venda"]."';\" class='btn btn-success'>Editar</button>
							<button class ='btn btn-danger'>Excluir</button>
					   </td>";
			print "</tr>";
		}
		print "</table>";
	}
	else{
		print "<br><div class='alert alert-danger'>Nenhum dado cadastrado!</div>";
	}
?>