<?php
 class Test {
    public $name;

    public function __construct($name){
        $this-> name = $name;
    }

    public function __toString(){
        return "Mi nombre es ".$this->name;
    }
}

    $obj = new Test('Uver');
    echo $obj;
?>