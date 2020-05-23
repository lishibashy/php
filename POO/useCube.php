<?php

include 'cube.php';

$action = new Cube();

$mov = "R";

$action->movR = $mov;
$action->movU = "U";

echo $action->executeR();
echo "<br>";
echo "<br>";
echo $action->executeU();

?>