<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 class="text-center m-4">Edição de Vendas</h1>
    <?php
        $sql = "SELECT * FROM venda WHERE id_venda = ".$_REQUEST["id_venda"];
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();
    ?>

    <form action="index.php?page=sal-venda" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_venda" value="<?php print $_REQUEST["id_venda"]; ?>">
        <div class="container">
            <div class="row">
                <div class="form-group col-6">
                    <label>Item</label>
                    <?php
                    $query = "SELECT id_item,nome_item FROM item";
                    $res = mysqli_query($conn, $query);

                    $op = "<select class='form-control' name='item_id_item'>";

                    while ($row_item = mysqli_fetch_assoc($res)){
                        @$op .= "<option value = '{$row_item ['id_item']}'>{$row_item ['nome_item']}</option>";
                    }

                    $op .= "</select>";
                    echo $op;
                    ?>
                </div>
                <div class="form-group col-6">
                    <label>Cliente</label>
                    <?php
                    $query = "SELECT id_cliente,nome_cliente FROM cliente";
                    $res = mysqli_query($conn, $query);

                    $op = "<select class='form-control' name='cliente_id_cliente'>";

                    while ($row_cliente = mysqli_fetch_assoc($res)){
                        @$op .= "<option value = '{$row_cliente ['id_cliente']}'>{$row_cliente ['nome_cliente']}</option>";
                    }

                    $op .= "</select>";
                    echo $op;
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label>Data da Venda</label>
                    <input type="date" name="data_venda" class="form-control" value="<?php print $row["nome_item"]; ?>">
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>