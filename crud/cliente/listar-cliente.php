<h1 class="text-center m-4">Lista de Clientes</h1>
<?php
    $sql = "SELECT * FROM cliente";
    $res = $conn->query($sql) or die($conn->error);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
            print "<tr>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>Telefone</th>";
                print "<th>Endereço</th>";
                print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_assoc()){
            print "<tr>";
                print "<td>".$row["id_cliente"]."</td>";
                print "<td>".$row["nome_cliente"]."</td>";
                print "<td>".$row["telefone_cliente"]."</td>";
                print "<td>".$row["endereco_cliente"]."</td>";
                print "<td>
                            <button onclick=\"location.href='index.php?page=edit-cliente&id_cliente=".$row["id_cliente"]."';\" class='btn btn-success'>Editar</button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-cliente&acao=excluir&id_cliente=".$row["id_cliente"]."';}else{false;}\" class ='btn btn-danger'>Excluir</button>
                       </td>";
            print "</tr>";
        }
        print "</table>";
    }
    else{
        print "<br><div class='alert alert-danger'>Nenhum dado cadastrado!</div>";
    }
?>

