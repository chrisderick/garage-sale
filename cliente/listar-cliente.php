<h1 class="text-center m-4">Lista de Clientes</h1>
<?php
	$sql = "SELECT * FROM cliente
			INNER JOIN grupo ON grupo_id_grupo=id_grupo
            INNER JOIN gravadora ON gravadora_id_gravadora=id_gravadora";
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
				print "<th>#</th>";
				print "<th>Nome do(a) Cliente</th>";
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
				print "<td>".$row["id_cliente"]."</td>";
				print "<td>".$row["nome_cliente"]."</td>";
				if($row["sexo_cliente"] == 1){
                print "<td>Masculino</td>";
            }elseif($row["sexo_cliente"] == 0){
                print "<td>Feminino</td>";
            }
				print "<td>".date('d-m-Y', strtotime($row["nasc_cliente"]))."</td>";
				print "<td>".$row["nome_grupo"]."</td>";
				print "<td>".$row["nome_gravadora"]."</td>";
				print "<td>".$row["posicao_cliente"]."</td>";
				if($row["solo_cliente"] == 1){
                print "<td>Sim</td>";
				}elseif($row["solo_cliente"] == 0){
                print "<td>Não</td>";
				}
				print "<td>
							<button onclick=\"location.href='index.php?page=edit-cliente&id_cliente=".$row["id_cliente"]."';\" class='btn btn-success'>Editar</button>
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