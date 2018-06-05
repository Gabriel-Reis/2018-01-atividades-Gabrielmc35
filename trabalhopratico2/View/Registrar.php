


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <div class="col-md-4">   	
        </div>

        <div class="col-md-4 ">

            <h1 class="text-center">Fazer Cadastro no sistema</h1>
            <form method="post" action="/trabalhopratico2/Router.php?op=3" class="form-group" id="Cadastro-form">
                <div class="form-group"  id="nome">

                    <label for="name">User:</label>
                    <input type="text" name="name" class="form-control " required oninvalid="this.setCustomValidity('Digite o nome corretamente')"  oninput="this.setCustomValidity('')">
                  
                </div>


                  <div class="form-group" id="password" >
                    <label for="password">Senha: </label>
                    <input type="password" name="password" class="form-control" required oninvalid="this.setCustomValidity('Senha nao pode ficar em branco')"  oninput="this.setCustomValidity('')">
                   
                </div>

                  <div class="form-group" id="email" >

                    
                    <label for="email">E-mail: </label>
                    <input type="text" name="email" class="form-control"required oninvalid="this.setCustomValidity('Digite o email de forma correta')"  oninput="this.setCustomValidity('')">
                     <? //php echo  "cadastrado" ?>
                   
                </div>

               
                <div class="botoes">
                    <input type ="submit" id="Cadastro" class="botao btn btn-info btn-lg " value="   Confirmar Cadastro" align="text-center">
             <a href="../trabalhopratico2/Router.php?op=4.php">Voltar</a>
                </div>
                
            </form>
        </div>
        <div class="col-md-4">   	
        </div>

