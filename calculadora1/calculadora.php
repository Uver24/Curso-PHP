<?php
 class Calculadora{

    public function add($number1, $number2){
        if (is_numeric($number1) && is_numeric($number2)){
            return $number1 + $number2;
        }else{
            echo "Ambos valores deben ser numericos "; 
        }
    }
    public function subtract($number1, $number2){
        if(is_numeric($number1) && is_numeric($number2)){
            return $number1 - $number2;
        }else{
            echo "Ambos valores deben ser numericos ";
        }
    }
    public function multiply($number1, $number2){
        if(is_numeric($number1) && is_numeric($number2)){
            return $number1 * $number2;
        }else{
            echo "Ambos valores deben ser numericos ";
        }
    }
    public function divide($number1, $number2){
        if (is_numeric($number1) && is_numeric($number2) && $number2 !=0){
            return $number1/$number2;
        }else{
            echo "Ambos valores deben ser numericos y el divisor no debe ser cero";
        }
    }
}

 $calc = new Calculadora ;
    echo $calc-> add(1,3)."<br>";
    echo $calc-> subtract(4,3)."<br>";
    echo $calc-> multiply(2,3)."<br>";
    echo $calc-> divide(10,3)."<br>";

?>