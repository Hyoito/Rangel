<?php
class Calc{ 

    private $power = false;

    public function somar(int $x, int $y) : int {
        if($this->power){
            echo $x + $y;
            return 0;
        }
        echo "Calculadora está desligada";
        return 0;   
    }
    public function subtrair(int $x, int $y) : int {
        if($this->power){
            echo $x - $y;
            return 0;
        }
        echo "Calculadora está desligada";
        return 0;
    }
    public function multiplicar(int $x, int $y) : int {
        if($this->power){
            echo $x * $y;
            return 0;
        }
        echo "Calculadora está desligada";
        return 0;
    }
    public function dividir(int $x, int $y) : float {
        if($this->power){
            echo $x / $y;
            return 0;
        }
        echo "Calculadora está desligada";
        return 0;
    }
    public function ligar(){

        $this->power = true;
    }
    public function desligar(){

        $this->power = false;
    }
}
