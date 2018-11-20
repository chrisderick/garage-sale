<h1 class="text-center m-4">Cadastro de Gravadoras</h1>

	<!-- Formulário de Cadastro !-->
<form action="index.php?page=sal-gravadora&acao=cadastrar" method="POST">

	<div class="container">
		<div class="row">
			<div class="form-group col-8">
				<label>Nome</label>
				<input type="text" name="nome_gravadora" class="form-control">
			</div>
			<div class="form-group col-4">
				<label>Fundada em</label>
				<input type="date" name="fundacao_gravadora" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-12">
				<label>CEO</label>
				<input type="text" name="ceo_gravadora" class="form-control">
			</div>
		</div>
		<div class="form-group">
				<button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
		</div>
	</div>

</form>