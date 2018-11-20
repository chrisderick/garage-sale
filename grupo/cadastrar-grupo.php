<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background: url(img/loonaicecream.png) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		
		}
	</style>
	<title></title>
</head>
<body>
<h1 class="text-center m-4">Cadastro de Grupos</h1>

	<!-- Formulário de Cadastro !-->
<form action="index.php?page=sal-grupo&acao=cadastrar" method="POST">

	<div class="container col-10">
		<div class="row">
			<div class="form-group col-6">
				<label>Nome</label>
				<input type="text" name="nome_grupo" class="form-control">
			</div>
			<div class="form-group col-6">
				<label>Tipo</label>
				<select class="form-control" name="tipo_grupo">
					<option value=0>Girl Group</option>
					<option value=1>Boy Group</option>
					<option value=2>Mixed Group</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-6">
				<label>Debut</label>
				<input type="date" name="debut_grupo" class="form-control">
			</div>
			<div class="form-group col-6">
				<label>Disband</label>
				<input type="date" name="disband_grupo" class="form-control">
			</div>
		</div>
		<div class="form-group">
				<button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
		</div>
	</div>

</form>
</body>

</html>