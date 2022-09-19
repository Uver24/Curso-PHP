<?php
 class Account{
        private $balence =0 ;
        
        public function deposit($amount){
            $this->balence += $amount;
            echo "El monto ha sido depositado en su cuenta </br>";
            echo "El nuevo balance es :".$this->balence."</br>";
        }
        
        public function getBalance(){
            return $this->balence;
        }

        public function withdraw($amount){
            if($amount<= $this->balence){
                $this->balence -=$amount;
                echo "Se retira el monto"."<br>";
                echo "El saldo restante es".$this->balence."<br>" ;
            }else{
                echo "Fondo insuficiente"."<br>";
            }
    }
 }
 $accObj = new Account();
 echo $accObj-> getBalance();
 $accObj->deposit(100);
 $accObj->withdraw(30);

 ?>