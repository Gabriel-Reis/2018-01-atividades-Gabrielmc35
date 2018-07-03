<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inserir Cidades</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<body>
		<div class="col-md-4">   	
        </div>

        <div class="col-md-4 ">
	
		<h1 class="text-primary"> Cadastrar Cidades </h1>
		<br>
		<form action="router.php?op=6" method="post" class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" required>
			<label for="estado_id">Estado:</label>
			<select name="estado_id" required>
			<option value="">selecione</option>
			<?php foreach ($lista as $e): ?>
				<option value="<?= $e['id']?>"><?=$e['nome']?> </option>
			<?php endforeach ?>
			<option value=""></option>
			</select>

			<br><br>
			<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success" align="center">
			<br>
			<br>
    	<a href= "index.php" class="btn btn-danger">Voltar</a> 
		</form>
	</body>
</html>
