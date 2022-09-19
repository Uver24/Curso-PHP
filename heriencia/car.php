<?php
 Class vehicle {
      
    private $noOfWheels;
    private $color;
    private $fuel;
    private $speed;

        public function getNoOfWheels() {
            return $this->noOfWheels;
        }

        public function setNoOfwheels ($wheels){
            $this->noOfWheels = $wheels;
            echo "No of Wheels are ". $this->noOfWheels."</br>";
        } 

        public function getColor (){
            return $this->color;
        }

        public function setColor ($color){
            $this->color = $color;
            echo "Color is ". $this->color."</br>";
        }

        public function getFuel (){
            return $this->fuel; 
        }

        public function setFuel ($fuel){
            $this->fuel = $fuel;
			echo "Fuel is ". $this->fuel."</br>";
        }

        public function getSpeed(){
			return $this->speed;
		}
		
		public function setSpeed($speed){
			$this->speed = $speed;
			echo "Speed is ". $this->speed."</br>";
		}

        public function start (){
            echo "Vehicle is starting...</br>";
        }

        public function accelerate(){
            echo "Vehicle is accelerating...</br>";
        }

        public function brake(){
            echo "Vehicle is stoping...</br>";
        }

 }

 class PassengerVehicle extends vehicle{
    private $passengerSeats;

    public function getPassengerSeats (){
        return $this->passemgerSeats;
    }

    public function setPassengerSeats($seats){
        return $this-> passengerSeats = $seats;
        echo"No of seats are".$this->passengerSeats ."<br>";
    }
 }

 class TransportationVehicle extends vehicle {
     
    private $noOfDoors;
    private $loadCapacity;

    public function getNoOfDoors(){
        return $this->$noOfDoors;
    }
    
    public function setNoOfDoors($doors){
        return $this->noOfDoors = $doors;
    }
    
    public function getLoadCapacity (){
        return $this-> loadCapacity;
    }
    public function setLoadCapacity($loadCapacity){
        return $this->loadCapacity  = $loadCapacity;
    }
 }

 class Bike extends passengerVehicle{
    private $saddleHeight;
    public function getSaddleHeight(){
        return $this-> saddleHeight;
    }

    public function setSaddleHeight ($saddleHeight){
        return $this->saddleHeight = $saddleHeight;
    }

    public function accelerate (){
        echo "accelerate metho from bike class .....</br>";
    }

    public function brake(){
        parent::brake();
        echo"Brake method from bike class ... </br>";
     }
 }

 class Car extends PassengerVehicle{
    private $noOfDoors;

    public function getNoOfDoors(){
            return $this->noOfDoors;
        }
    public function setNoOfDoors($noOfDoors){
        return $this->noOfDoors  = $noOfDoors;
        echo "No of Doors are ". $this->noOfDoors."</br>";
    }
 }

 class Van extends TransportationVehicle {
    private $noOfBoxes;
    public function getNoOfBoxes (){
        return $this->noOfBoxes ;
    }

    public function setNoOfBoxes($noOfBoxes){
        return $this->noOfBoxes = $noOfBoxes;
    }
 }
  class Truck extends TransportationVehicle{
    private $sizeOfContainer;
    public function getSizeOfContainer(){
        return $this->sizeOfContainer;
    }

    public function setSizeOfContainer ($sizeOfContainer){
        return $this->sizeOfContainer = $sizeOfContainer;
    }

  }

 
  $bikeObj = new Bike();
  $bikeObj->setNoOfWheels(2);
  $bikeObj->setColor("black");
  $bikeObj->setFuel("Patrol");
  $bikeObj->setSpeed(0);
  $bikeObj->setPassengerSeats(2);
  $bikeObj->setSaddleHeight(2);
      
      $bikeObj->start();
      $bikeObj->accelerate();
      $bikeObj->brake();


?>