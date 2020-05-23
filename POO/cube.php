<?php

class Cube{

    public $movR;
    public $movR2;
    public $movL;
    public $movL2;
    public $movU;
    public $movU2;

    public function executeR()
    {
        return "Movimento " . $this->movR . " executado.";
        
    }

    public function executeR2($movR2 = null)
    {
        # code...
        echo "Movimento " . $this->movR2 . " executado.";
    }

    public function executeL($movL = null)
    {
        # code...
        echo "Movimento " . $this->movL . " executado.";
    }

    public function executeL2($movL2 = null)
    {
        # code...
        echo "Movimento " . $this->movL2 . " executado.";
    }

    public function executeU($movU = null)
    {
        # code...
        echo "Movimento " . $this->movU . " executado.";
    }

    public function executeU2($movU2 = null)
    {
        # code...
        echo "Movimento " . $this->movU2 . " executado.";
    }


}

?>