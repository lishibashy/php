<?php

require_once ('Carro.php');

$novoCarro = new Carro();

$novoCarro->marca = "Volkswagen";

$novoCarro->modelo = "Gol";

$novoCarro->acelerar();

echo "<br>";
echo "<br>";

$novoCarro->frenar();

?>