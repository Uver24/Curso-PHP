<?php
 class Dress {
    public $color= "red";
    public $fabric= "Linen";
    public $design= "Slim fit Blazer";
 }

 $dressObje = new Dress ;
 $dressObje -> color = "Black";

 var_dump ($dressObje);
 echo "<br>";
 print_r($dressObje);
?>