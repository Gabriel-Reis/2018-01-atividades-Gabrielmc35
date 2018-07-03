<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inserir Estado</title>
		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	
<div class="col-md-4">   	
        </div>

        <div class="col-md-6 ">
        		<h1 class="text-primary"> Cadastrar Estado </h1>
		<br><br><br>
		<form action="router.php?op=5" method="post" class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" required>

			<label for="sigla">Sigla do estado:</label>
			<input type="text" name="sigla" required>

			<br><br>
			<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success">
			<br>
			<br>
    	<a href= "index.php" class="btn btn-danger">Voltar</a> 

		</form>
	</body>
</html>
