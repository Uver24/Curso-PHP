<?php
class Dress {
    public $color= "red";
    private $fabric= "Linen";
    private $design= "Slim fit Blazer";
 
    Public function displayInfo (){
        echo "The info the dress."."<br>";
        echo $this->color ."<br>"; 
        echo $this->fabric ."<br>";
        echo $this->design ."<br>";
    }

    Private  function helloWordl($number1, $number2){
            return $number1 + $number2;
        }
}
    $dressObj= new Dress();
    // echo $dressObj-> color;
    echo $dressObj->fabric; // si visibilidad es private no te puede acceder fuera de los corchetes 
?>