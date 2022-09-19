<?php
class Dress {
    const SMALL = "Small";
    const MEDIUM = "Medium";
    const LARGE = "Large";
    public $sisze;
    public $color= "red";
    public $fabric= "Linen";
    public $design= "Slim fit Blazer";
 
    Public function displayInfo (){
        echo "The info the dress."."<br>";
        echo $this->color ."<br>"; 
        echo $this->fabric ."<br>";
        echo $this->design ."<br>";
        echo self :: MEDIUM;."<br>";

    }

    Public function helloWordl($number1, $number2){
            return $number1 + $number2;
        }
}
//     $dressObj= new Dress();
//    echo $dressObj->helloWordl(20,30)

$dressObj = new Dress ();
$dressObj->size=Dress::MEDIUM;
?>