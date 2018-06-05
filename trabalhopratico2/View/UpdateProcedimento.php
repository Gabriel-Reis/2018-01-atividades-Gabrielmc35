<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

	<h1>Modificar Procedimento</h1>
		<br>
  	  <?php 
					  	  	use Model\Procedures;
					  	  	$procedure = new Procedures();
					  	  	$list = $procedure->AllProcedimentos();
					  	    ?>
					     
					    <?php ?>
	
					<label>Selecione o procedimento que deseja modificar o valor</label>

					<form name="Modificaprocedimento" method="post" action="./router.php?op=13">

					<label for="id">Procedimento:</label>
					<select name="id"  required oninvalid="this.setCustomValidity('Favor selecione o procedimento corretamente')"  oninput="this.setCustomValidity('')"  /> 
						<option value="">Procedimentos:</option>

						<?php 
						  	//use Model\Procedure;
			  	  	
					  	  	$procedure = new Procedures();
					  	  	$lists = $procedure->AllProcedimentos();
						foreach( $lists as $linha ): ?>

							<option value=" <?= $linha['id'] ?> "> <?= $linha['name'] ?></option>


						<?php endforeach ?>	

					</select>

					<br>
					<label>Valor atualizado do procedimento:</label>
					<input type="number" name="preco" placeholder="valor" required oninvalid="this.setCustomValidity('Valor nao pode ficar em branco (0) ')"  oninput="this.setCustomValidity('')"  /> 
					<br>
						<input type="submit" class="btn btn-info" value="Modificar">
					</form>

			
		 <a href="../trabalhopratico2/Router.php?op=9.php"  class="btn btn-danger">Voltar</a>



</body>
</html>