<?php
//  se puede llamar un metodo dentro de otro
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
   Public function helloWorld(){
       echo $this-> displayInfo ();
   }
}

$dressObj= new Dress();
$dressObj->helloWorld();
?>
