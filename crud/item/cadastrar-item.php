<!DOCTYPE html>
<html>

<head>
	
</head>

<body>
	<h1 class="text-center m-4">Cadastro de Itens</h1>

    <!-- Formulário de Cadastro !-->
    <form action="index.php?page=sal-item" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="container">
            <div class="row">
                <div class="form-group col-6">
                    <label>Nome</label>
                    <input type="text" name="nome_item" class="form-control">
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
                    <input type="number" name="preco_item" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
            </div>
        </div>
	</form>
</body>

</html>

