<h1 class="text-center m-4">Lista de Itens</h1>
<?php
    $sql = "SELECT * FROM item";
    $res = $conn->query($sql) or die($conn->error);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
            print "<tr>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>Tipo</th>";
                print "<th>Preço</th>";
                print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_assoc()){
            print "<tr>";
                print "<td>".$row["id_item"]."</td>";
                print "<td>".$row["nome_item"]."</td>";
                if($row["tipo_item"] == 0){
                    print "<td>Livro</td>";
                }elseif($row["tipo_item"] == 1){
                    print "<td>Eletrônico</td>";}
                elseif($row["tipo_item"] == 2){
                    print "<td>Eletrodoméstico</td>";}
                print "<td>".$row["preco_item"]."</td>";
                print "<td>
                            <button onclick=\"location.href='index.php?page=edit-item&id_item=".$row["id_item"]."';\" class='btn btn-success'>Editar</button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-item&acao=excluir&id_item=".$row["id_item"]."';}else{false;}\" class ='btn btn-danger'>Excluir</button>
                       </td>";
            print "</tr>";
        }
        print "</table>";
    }
    else{
        print "<br><div class='alert alert-danger'>Nenhum dado cadastrado!</div>";
    }
?>

