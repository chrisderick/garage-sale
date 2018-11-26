<h1 class="text-center m-4">Edição de Itens</h1>
<?php
    $sql = "SELECT * FROM item WHERE id_item = ".$_REQUEST["id_item"];
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
?>

<form action="index.php?page=sal-item" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_item" value="<?php print $_REQUEST["id_item"]; ?>">
    <div class="container">
        <div class="row">
            <div class="form-group col-6">
                <label>Nome</label>
                <input type="text" name="nome_item" class="form-control" value="<?php print $row["nome_item"]; ?>">
            </div>
            <div class="form-group col-4">
                <label>Tipo</label>
                <select name="tipo_item" class="form-control">
                    <option value="0">Livro</option>
                    <option value="1">Eletrônico</option>
                    <option value="2">Eletrodomésticos</option>
                </select>
            </div>
            <div class="form-group col-2">
                <!--TODO Máscara--><label>Preço</label>
                <input type="number" name="preco_item" class="form-control" value="<?php print $row["preco_item"]; ?>">
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
        </div>
    </div>
</form>