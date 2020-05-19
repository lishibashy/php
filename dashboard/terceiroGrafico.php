<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População'],

          <?php
          include 'conexao.php';
          $sql = "SELECT * FROM cidades";
          $buscar = mysqli_query($conexao, $sql);

          while ($dados = mysqli_fetch_array($buscar)){
            $cidade = $dados['cidade'];
            $populacao = $dados['populacao'];
          ?>
          [ '<?php echo $cidade ?>', <?php echo $populacao ?> ],


        <?php } ?>

        ]);

        var options = {
          title: 'Cidades',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficoPizza'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="graficoPizza" style="width: 450px; height: 400px"></div>
  </body>
</html>
