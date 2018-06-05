
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Todos os Procedimentos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="row">
        
                    <div class="col-lg-12">
                       <table class = "table  table-bordered text-left  " style =" width:100%; background-color:#FFFFE0; ">
                            <thead>
                            <th>ID</th>
                            <th >Procedimento</th>
                            <th>Preço</th>
                            </thead>
                            <?php 
                        
                            foreach ($list as $line): ?>
                                <tr>
                                    <td><?= $line['id'] ?></td>
                                    <td><?= $line['name'] ?></td>
                                    <td><?= $line['price'] ?></td>
                                </tr>

                            <?php endforeach ?>
                        </table>
<div style="text-align: center ">
<a href="../trabalhopratico2/Router.php?op=4.php"  class="btn btn-danger">Voltar</a>

</div>
                    </div>
                    <div class="col-lg-2">
                       
                    </div>
                         </div>
    </body>
</html>
