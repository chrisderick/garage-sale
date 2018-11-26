<h1 class="text-center m-4">Lista de Itens</h1>
<?php
	$sql = "SELECT * FROM item
			INNER JOIN grupo ON grupo_id_grupo=id_grupo
            INNER JOIN gravadora ON gravadora_id_gravadora=id_gravadora";
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
				print "<th>#</th>";
				print "<th>Nome do(a) Item</th>";
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
				print "<td>".$row["id_item"]."</td>";
				print "<td>".$row["nome_item"]."</td>";
				if($row["sexo_item"] == 1){
                print "<td>Masculino</td>";
            }elseif($row["sexo_item"] == 0){
                print "<td>Feminino</td>";
            }
				print "<td>".date('d-m-Y', strtotime($row["nasc_item"]))."</td>";
				print "<td>".$row["nome_grupo"]."</td>";
				print "<td>".$row["nome_gravadora"]."</td>";
				print "<td>".$row["posicao_item"]."</td>";
				if($row["solo_item"] == 1){
                print "<td>Sim</td>";
				}elseif($row["solo_item"] == 0){
                print "<td>Não</td>";
				}
				print "<td>
							<button onclick=\"location.href='index.php?page=edit-item&id_item=".$row["id_item"]."';\" class='btn btn-success'>Editar</button>
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