<?php
class Dress {
    public $color= "red";
    public $fabric= "Linen";
    public $design= "Slim fit Blazer";
 
    Public function displayInfo (){
        echo "The info the dress.";
    }
}
$dressObje=new Dress();
$dressObje->displayInfo();
?>