<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <!-- <link href="./Bootstrap_files/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body style="background-color:whitesmoke">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total de Clientes / Ano</div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size: 40px">
                           
                            <?php

                                include 'conexao.php';
                                $sql = "SELECT SUM(quantidade) AS Total FROM clientes";
                                $consulta = mysqli_query($conexao, $sql);
                                $dados = mysqli_fetch_array($consulta);
                                echo $dados['Total'];

                            ?>
                            <span style="font-size: 14px"> /unid</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Fatuamento / Ano</div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size: 40px">
                            
                            <?php
                            
                                include 'conexao.php';
                                $sql = "SELECT SUM(valor_venda) AS total_venda FROM vendas";
                                $consulta = mysqli_query($conexao, $sql);
                                $dados = mysqli_fetch_array($consulta);
                                $valor = $dados['total_venda'];
                                echo 'R$ '. number_format($valor, 2, '.','');
                                //echo $dados['total_venda'];

                            ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Vendas / Ano</div>
                    <div class="card-body">
                    <h5 class="card-title" style="text-align: center; font-size: 40px">
                            
                            <?php
                               
                               include 'conexao.php';
                                $sql = "SELECT SUM(quantidade_venda) AS total_qtde FROM vendas";
                                $consulta = mysqli_query($conexao, $sql);
                                $dados = mysqli_fetch_array($consulta);
                                echo $dados['total_qtde'];

                            ?>

                        </h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>