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

/*
$jogo = ["ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11];

foreach ($jogo as $key => $value) {
    # code...
    echo $key . ": ";
    echo $value . "<br>";
}


*/



# Exmplo 04
#================================================
$jogo = [
            ["ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11],
            ["ID"=>2, "NOME"=>"José", "PONTOS"=> 4],
            ["ID"=>3, "NOME"=>"Zeca", "PONTOS"=> 22]
        ];

//print_r($jogo);

//echo '<br>';
//echo $jogo[1]["NOME"];

foreach ($jogo as $jogadores) {
    # code...
    extract($jogadores);
    echo $NOME . "<br>";
    
    
}



# Exmplo 04
#================================================
/*
Array(
    [0] => Array
        (
            [id] => 1
            [firstname] => Firstname one
            [lastname] => Lastname one
        )

    [1] => Array
        (
            [id] => 2
            [firstname] => Firstname two
            [lastname] => Lastname two
        )

    [2] => Array
        (
            [id] => 3
            [firstname] => Firstname three
            [lastname] => Lastname three
        )
)
*/

$row = [
            ["id" => 1, "firstname" => "Fulano", "lastname" => "Silva"],
            
            ["id" => 2, "firstname" => "Beltrano", "lastname" => "Soares"],
        
            ["id" => 3, "firstname" => "Cicrano", "lastname" => "Almeida"]

        ];


var_dump($row);

echo "<hr/>";

foreach ($row as $rows) {
    echo $rows['id'] . "<br>";
    echo $rows['firstname'] . "<br>";
    echo $rows['lastname'] . "<br>";
}

?>