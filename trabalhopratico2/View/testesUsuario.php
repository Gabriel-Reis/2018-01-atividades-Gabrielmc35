<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Exames do Usuário</title>
       
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       
    </head>
    <body>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="row jumbotron">
                    <h1 align="center">Exames do Usuário</h1>
                </div>
                <div class align="center" ="row">
                    <div class="col-lg-10">
                      
                      
<table class= "table  table-bordered  " style =" width:100%; background-color:#FFFFE0; ">
                            <thead>
                            <th>id</th>
                            <th>Procedimento</th>
                            <th>Data</th>
                            <th>Preço</th>
                            </thead>
                            <?php foreach ($results as $line): ?>
                                <tr>
                                    <td><?= $line['id'] ?></td> 
                                    <td><?= $line['name'] ?></td>
                                    <td><?= $line['date'] ?></td>
                                    <td><?= $line['price'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>

                        <?php
                            echo " Total a pagar : " . $totalCount['cost'];
                        ?>

                                                       <a href="../trabalhopratico2/Router.php?op=4.php"  class="btn btn-danger">Voltar</a>

                    </div>
                   
                </div>
            </div>
            
        </div>
    </body>
</html>
