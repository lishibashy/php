<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="dashboard_fin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
            <!-- CARDS -->
            <div class="container-bg">
                <div class="container">
                    <div class="row">
                            <div class="col-sm">
                                <div class="card text-white bg-primary o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-comments"></i>
                                        </div>
                                        <div class="mr-5"> Receita
                        
                                         </div>
                                    </div>
           
                                    <a class="card-footer text-white clearfix small z-1" href="#">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        
                            <div class="col-sm">
                                <div class="card text-white bg-danger o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-comments"></i>
                                        </div>
                                        <div class="mr-5"> Despesa
                        
                                         </div>
                                    </div>
           
                                    <a class="card-footer text-white clearfix small z-1" href="#">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        <div class="col-sm">
                            <div class="card text-white bg-success o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-comments"></i>
                                        </div>
                                        <div class="mr-5"> Lucro Liquido
                        
                                         </div>
                                    </div>
           
                                    <a class="card-footer text-white clearfix small z-1" href="#">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grafico de Colunas -->
            <div class="container-bg-graph">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                        
                          <?php include 'dashboard_fin_graph01.php'; ?>

                        </div>
                    </div>
                </div>
            </div>

             <!-- Grafico de Barras -->
             <div class="container-bg-graph2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <?php include 'dashboard_fin_graph02.php'; ?>
                        </div>
                        <div class="col-sm">
                        
                        </div>
                    </div>
                </div>
            </div>




 <!-- JS, Popper.js, and jQuery -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 



</body>
</html>