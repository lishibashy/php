<?php

class Carro
{

    public $marca;
    public $modelo;

    public function acelerar()
    {

        echo "Carro modelo: " . $this->modelo . " esta acelerando...";

    }

    public function frenar()
    {

        echo "Carro modelo: " . $this->modelo . " esta frenando...";

    }


}




?>