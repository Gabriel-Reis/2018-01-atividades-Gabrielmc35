<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inserir Aluno</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<body>
	
<div class="col-md-4">   	
        </div>

        <div class="col-md-4 ">
        		<h1  class="text-primary"> Cadastrar  Aluno </h1>
		<br><br><br>
		<form action="router.php?op=4" method="post" class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" required>

			<br>
			<label for="rua">Rua:</label>
			<input type="text" name="rua" required>
			<br>
			<label for="numero">numero:</label>
			<input type="number" name="numero" >

			<br>
			<label for="bairro">Bairro:</label>
			<input type="text" name="bairro" required>
			<br>
			<label for="cidade_id">Cidade:</label>
			<select name="cidade_id" required>
			<option value="">SELECIONE</option>
			<?php foreach ($lista as $e): ?>
				<option value="<?= $e['id']?>"><?=$e['nome']?>  ID: <?=$e['id']?> </option>
			<?php endforeach ?>
			<option value=""></option>
			</select>

			<br>
			<label for="cep">CEP:</label>
			<input type="number" name="cep" required>

			<br>
			<label for="bairro">Email:</label>
			<input type="text" name="email" required>

			<br><br>
			<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success">
			<br>
			<br>
    	<a href= "index.php" class="btn btn-danger">Voltar</a> 


		</form>
	</body>
</html>
