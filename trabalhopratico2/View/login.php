<!DOCTYPE html>
<html>
<head>


    <meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



</head>



        <div class="col-md-4">  

        </div>

        <div class="col-md-4 ">
            <h1 class="text-center">Fazer login no sistema</h1>
          <form action="/trabalhopratico2/router.php?op=1"  onsubmit="return validate()" method="post">
                <div class="form-group"  id="nome">

                    <label for="name">E-mail:</label>
                    <input type="text" name="email" id="email " class="form-control" required oninvalid="this.setCustomValidity('Entre com o login corretamente')"  oninput="this.setCustomValidity('')"  /> 
                </div>

                  <div class="form-group" id="password" >


                    <label for="password">Senha: </label>
                    <input type="password" name="password" id="password" class="form-control" required   oninvalid="this.setCustomValidity('Não deixe a senha vazia ')"  oninput="this.setCustomValidity('')"  />
                   
                </div>

                <div class="botoes">


                    <input type ="submit" id="login" class="botao btn btn-info btn-lg " value="   Logar" align="text-center">
                </div>

                <h3 > Caso nao possua cadastro no nosso sistema </h3>
                <br>
             <a href="../trabalhopratico2/Router.php?op=12.php"><input type="button" class="bot btn btn-danger btn-lg " value="Cadastrar "></a>
             <br>
             <br>
 <a href="../trabalhopratico2/Router.php?op=4.php" class="btn btn-secondary">Voltar</a>
            </form>
        </div>

        <div class="col-md-4">   	
        </div>
</html>