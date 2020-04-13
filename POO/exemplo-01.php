<?php

class Pessoa{

    public $nome;//Atributo

    public function falar(){//Método

        return "Meu nome é ".$this->nome;

    }
}

$glaucio = new Pessoa();
$glaucio->nome = "Fulano da Silva";
echo $glaucio->falar();


?>