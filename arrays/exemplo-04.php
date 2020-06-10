<?php

#===============================
# Array Multidimencional
#===============================

#   |   ID  |   NOME    |   PONTOS  |
#   |   1   |   Zé      |   11      |
#   |   2   |   José    |   4       |
#   |   3   |   Zeca    |   22      |


# Exmplo 01
#================================================
/*
$jogo = array(

    array(1, "Zé", 11),
    array(2, "José", 4),
    array(3, "Zeca", 22)

);

print_r($jogo);

echo '<br>';
echo $jogo[1][1];
*/


# Exmplo 02
#================================================
/*
$jogo = array(

    array("ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11),
    array("ID"=>2, "NOME"=>"José", "PONTOS"=> 4),
    array("ID"=>3, "NOME"=>"Zeca", "PONTOS"=> 22)

);

print_r($jogo);

echo '<br>';
echo $jogo[1]["NOME"];

*/

# Exmplo 03
#================================================
$jogo = [
            ["ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11],
            ["ID"=>2, "NOME"=>"José", "PONTOS"=> 4],
            ["ID"=>3, "NOME"=>"Zeca", "PONTOS"=> 22]
        ];

print_r($jogo);

echo '<br>';
echo $jogo[1]["NOME"];




?>