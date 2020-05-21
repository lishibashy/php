<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vendas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h2> Cadastro de Vendas</h2>
        <form action="cadastrar_vendas.php" method="POST">
                <div class="form-group">
                    <label>Selecione o mês</label>
                    <select class="form-control" name="mes">
                        <option value="Jan">Jan</option>
                        <option value="Fev">Fev</option>
                        <option value="Mar">Mar</option>
                        <option value="Abr">Abr</option>
                        <option value="Mai">Mai<a</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Ago">Ago</option>
                        <option value="Set">Set</option>
                        <option value="Out">Out</option>
                        <option value="Nov">Nov</option>
                        <option value="Dez">Dez</option>
                    </select>
                </div>
                    <div class="form-group">
                        <label>Digite a quantidade</label>
                        <input type="number" name="quantidade" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Digite o valor</label>
                        <input type="numeric" name="valor" id="" class="form-control">
                    </div>
                    <div style="text-align: right">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
            
        </form>
    </div>








<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>