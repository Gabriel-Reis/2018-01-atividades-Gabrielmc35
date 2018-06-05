<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Área de Administrador</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

    
        
        <center>
           
        </center>
        
        
            

        
        <div class="row">
        
                    <div class="col-lg-12">
                       <table class = "table  table-bordered text-left  " style =" width:100%; background-color:#FFFFE0; ">
                    <h2 align="center">Usuários Cadastrados</h2>
                   

                 

                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Tipo</th>
                        <th>Cadastrado em</th>
                    
                      </tr>

                      <?php
                     
                      use Model\User;
                      $user = new User();
                      $lists = $user->getAll();
                       foreach( $lists as $linha ): ?>
                      <tr>
                        <td><?= $linha['id'] ?></td>
                        <td><?= $linha['name'] ?></td>
                        <td><?= $linha['email'] ?></td>
                        <td><?= $linha['type'] ?></td>
                        <td><?= $linha['created_at'] ?></td>
                     
                      </tr>
                    <?php endforeach ?>

                  </table>
                  </div>
             
          
                    
            <div style="text-align: center ">
<a href="../trabalhopratico2/Router.php?op=9.php"  class="btn btn-danger">Voltar</a>

</div>
    
                </td>

            </tr>

</body>
</html>