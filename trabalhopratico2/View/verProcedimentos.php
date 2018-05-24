<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Todos os Procedimentos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="row">
        
                    <div class="col-lg-10">
                        <table class="table ">
                            <thead>
                            <th>ID</th>
                            <th>Procedimento</th>
                            <th>Preço</th>
                            </thead>
                            <?php foreach ($list as $line): ?>
                                <tr>
                                    <td><?= $line['id'] ?></td>
                                    <td><?= $line['name'] ?></td>
                                    <td><?= $line['price'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <div class="col-lg-2">
                        <form action="/TrabalhoPratico2/Router.php?op=7" onsubmit="return validateUpdate()" method="post">
                            <label for="idUpdate">Editar: </label>
                            <div class="row">

                                <input type="text" name="price" id="price" placeholder="Preço R$">
                                <input type="text" name="name" id="name" placeholder="Nome">

                            </div>
                            <input type="submit" class="btn btn-success " name="Confirmar mudanças">
             </form>        
                    </div>
                         </div>
    </body>
</html>
