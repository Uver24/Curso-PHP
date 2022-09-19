<?php
 
 Class CreditCard {

    const CARDNUMBER = "111122233334444";
    private $totalBalance = 1000;
    private $pinNumber = "1234";

    public function getCardnumber(){
        return self::CARDNUMBER;
    }

    Public function getTotalBalance(){
        return $this->totalBalance;
    }
    public function setTotalbalance($balance){
        $this->$totalBalance = $balance;
    }

    public function setPin($newPin){
        if( preg_match( "/^[1-9]\d{3}$/", $newPin )){
            $this->pinNumber = $newPin;

        }else{
        echo " El numero de Pin debe ser una cadena de 4 dijitos y debe ser mayor que 0";
        }
    }    
   
    public function getPin(){
        return $this->pinNumber;
    }

    public function withdrawMoney($cardNumber,$pinNumber,$withdrawMoney){
        if($cardNumber === $this->getCardnumber() && $pinNumber === $this->getPin()){
            $withdrawMoney = $withdrawMoney + $withdrawMoney * (3/100);
                if ($withdrawMoney <= getTotalBalance()){
                    $remBalance = $this->getTotalBalance() - $withdrawMoney;
                    $this->setTotalbalance ($remBalance);
                    echo "You have spend $withdrawMoney pounds and your remaing balance is $remBalance.";
                }else{
                    echo "you dont have enoug balance in your account";
                }
            }else{
                echo "your card number or pin is invalid";
        }
    }
    
}
$ccObj = new CreditCard;
$ccObj->setPin("3344");
$ccObj->withdrawMoney("1111222233334444", "3344", 490);
$ccObj->getTotalBalance();

?>