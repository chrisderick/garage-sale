<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 class="text-center m-4">Edição de Clientes</h1>
    <?php
        $sql = "SELECT * FROM cliente WHERE id_cliente = ".$_REQUEST["id_cliente"];
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();
    ?>

    <form action="index.php?page=sal-cliente" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_cliente" value="<?php print $_REQUEST["id_cliente"]; ?>">
        <div class="container">
            <div class="row">
                <div class="form-group col-8">
                    <label>Nome</label>
                    <input type="text" name="nome_cliente" class="form-control" value="<?php print $row["nome_cliente"]; ?>">
                </div>
                <div class="form-group col-4">
                    <!--TODO Máscara--><label>Telefone</label>
                    <input type="number" name="telefone_cliente" class="form-control" value="<?php print $row["telefone_cliente"]; ?>">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-12">
                    <label>Endereço</label>
                    <textarea name="endereco_cliente" class="form-control" placeholder="<?php print $row["endereco_cliente"]; ?>"></textarea>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>