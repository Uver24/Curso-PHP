 <!-- Como acceder alas propiedades de una clase atravez de metodos -->
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
}

 $dressObj= new Dress();
 $dressObj->displayInfo();
 ?>