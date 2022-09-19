<?php
 Class Student {
    public $name;

    public function __construct($name){
       
        $this-> name= $name;
    }

    public function __destruct(){
        echo "Yo estoy muriendo ....AAAA....";
    }
 }
  
 $stuObje= new Student("Tim");

 unset($stuObje);
?>