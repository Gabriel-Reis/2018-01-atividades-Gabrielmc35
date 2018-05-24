<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

        <div class="col-md-4">  

        </div>

        <div class="col-md-4 ">
            <h1 class="text-center">Fazer login no sistema</h1>
          <form action="/trabalhopratico2/router.php?op=1"  onsubmit="return validate()" method="post">
                <div class="form-group"  id="nome">

                    <label for="name">E-mail:</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                  <div class="form-group" id="password" >


                    <label for="password">Senha: </label>
                    <input type="password" name="password" id="password" class="form-control">
                   
                </div>

                <div class="botoes">


                    <input type ="submit" id="login" class="botao btn btn-info btn-lg " value="   Logar" align="text-center">
                </div>

                <a > Caso nao possua cadastro no nosso sistema </a>
                <br>
             <a href="/trabalhopratico2/view/Registrar.php"><input type="button" class="bot btn btn-danger btn-lg " value="Cadastrar "></a>
             <br>
             <br>
 <a href="/trabalhopratico2/Index.php" class="btn btn-secondary">Voltar</a>
            </form>
        </div>

        <div class="col-md-4">   	
        </div>
</html>