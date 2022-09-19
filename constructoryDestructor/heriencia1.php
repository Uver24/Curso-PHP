<?php
  Class A {
    public function __construct(){
        echo "Class A Constructor.</br>";
    }
  }

  Class B extends A {
    public function __construct(){
        echo "class B constructor.</br>";
    }
  }

  $obje = new B();
?>