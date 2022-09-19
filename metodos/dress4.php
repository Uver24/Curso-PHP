<?php
class Dress {
    public $color= "red";
    public $fabric= "Linen";
    public $design= "Slim fit Blazer";
 
    Public function displayInfo (){
        echo "The info the dress."."<br>";
        echo $this->color ."<br>"; 
        echo $this->fabric ."<br>";
        echo $this->design ."<br>";
    }

    Public function helloWordl($number1, $number2){
            return $number1 + $number2;
        }
}
    $dressObj= new Dress();
   echo $dressObj->helloWordl(20,30)
?>