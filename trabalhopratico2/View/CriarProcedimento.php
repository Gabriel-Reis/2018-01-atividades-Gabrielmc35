<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Novo Procedimento</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
    
    </head>
    <body>
       
            
                <div class="row jumbotron">
                    <h1 align="center">Criar procedimento</h1>
                </div>	
              
                    <form action="../trabalhopratico2/Router?op=14" onsubmit="return validate()" method="post">
                        <input type="text" name="name" id="name" placeholder="Procedimento ">
                        <input type="number" name="price" id="price" placeholder="Valor ">
                        <input type="submit" name="submit" id="submit" class="btn btn-info">
                        <a href="../trabalhopratico2/Router.php?op=9.php"  class="btn btn-danger">Voltar</a>
                    </form>
              
        </div>
    </body>
</html>

