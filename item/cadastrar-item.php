<!DOCTYPE hmtl>
<html>

<head>
	
</head>

<body>
	<h1 class="text-center m-4">Cadastro de Itens</h1>

		<!-- Formulário de Cadastro !-->
	<form action="index.php?page=sal-item&acao=cadastrar" method="POST">

		<div class="container">
			<div class="row">
				<div class="form-group col-7">
					<label>Nome</label>
					<input type="text" name="nome_item" class="form-control">
				</div>
				<div class="form-group col-2">
					<label>Sexo</label>
					<select name="sexo_item" class="form-control">
						<option value="1">Masculino</option>
						<option value="0">Feminino</option>
					</select>
				</div>
				<div class="form-group col-3">
					<label>Data de Nascimento</label>
					<input type="date" name="nasc_item" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-6 mx-auto">
				<div class="form-group">
					<label>Grupo</label>
					<?php
						$query = "SELECT id_grupo,nome_grupo FROM grupo";
						$res = mysqli_query($conn, $query);

						$op = "<select class='form-control' name='grupo_id_grupo'>";

						while ($row_grupo = mysqli_fetch_assoc($res)){
							@$op .= "<option value = '{$row_grupo ['id_grupo']}'>{$row_grupo ['nome_grupo']}</option>";
						}

						$op .= "</select>";
						echo $op;
					?>
				</div>
			</div>

			<div class="form-group col-6">
					<label>Posição</label>
					<input type="text" name="posicao_item" class="form-control">
			</div>
			
			</div>

			<div class="row">

				<div class="form-group col-2 mx-auto">
					<label>É artista solo?</label>
					<select class="form-control" id="solo_item" onchange="optionCheck()">

						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>

				<div class="form-group col-10 mx-auto" id="gravadora" style="visibility: hidden;">
						<label>Gravadora</label>
						<?php
							$query = "SELECT id_gravadora,nome_gravadora FROM gravadora";
							$res = mysqli_query($conn, $query);

							$op = "<select class='form-control' name='gravadora_id_gravadora'>";

							while ($row_gravadora = mysqli_fetch_assoc($res)){
								@$op .= "<option value = '{$row_gravadora ['id_gravadora']}'>{$row_gravadora ['nome_gravadora']}</option>";
							}
							$op .= "</select>";

							echo $op;
						?>
			 	</div>

			 	<script type="text/javascript">
				    function optionCheck(){
				        var option = document.getElementById("solo_item").value;
				        if(option == 1){
				            document.getElementById("gravadora").style.visibility ="visible";
				        }else if(option == 0){
				        	document.getElementById("gravadora").style.visibility ="hidden";
				        }
			        }
		    	</script>

 			</div>

 			
			<div class="form-group">
					<button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
			</div>
	</form>
</body>

</html>

