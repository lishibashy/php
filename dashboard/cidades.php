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
          ['Cidade', 'População', { role: 'annotation'}],

          <?php
          include 'conexao.php';
          $sql = "SELECT * FROM cidades";
          $buscar = mysqli_query($conexao, $sql);

          while ($dados = mysqli_fetch_array($buscar)){
            $cidade = $dados['cidade'];
            $populacao = $dados['populacao'];
          ?>
          [ '<?php echo $cidade ?>', <?php echo $populacao ?>,  <?php echo $populacao ?> ],


        <?php } ?>

        ]);

        var options = {
          title: 'Cidades População',
          //curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 1000px; height: 400px"></div>
  </body>
</html>
