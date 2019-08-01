<?php
include 'hcn.php';

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    public $denta = 0;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function getC()
    {
        return $this->c;
    }

    function getDenTa()
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }


}

?>