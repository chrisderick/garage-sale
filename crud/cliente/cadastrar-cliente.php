<!DOCTYPE html>
<html>

<head>
	
</head>

<body>
	<h1 class="text-center m-4">Cadastro de Clientes</h1>

    <!-- Formulário de Cadastro !-->
	<form action="index.php?page=sal-cliente" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
		<div class="container">
			<div class="row">
				<div class="form-group col-8">
					<label>Nome</label>
					<input type="text" name="nome_cliente" class="form-control">
				</div>
				<div class="form-group col-4">
                    <!--TODO Máscara--><label>Telefone</label>
					<input type="number" name="telefone_cliente" class="form-control">
				</div>
			</div>

            <div class="row">
                <div class="form-group col-12">
                    <label>Endereço</label>
                    <textarea name="endereco_cliente" class="form-control"></textarea>
                </div>
            </div>

			<div class="form-group">
					<button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
			</div>
        </div>
	</form>
</body>

</html>

