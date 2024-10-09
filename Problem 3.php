<?php

//Create a child class Bus that will inherit all of the variables and methods of the Vehicle class in Problem #1. 
class Vehicle {
    public $name = 0;
    public $speed = 0;
    public $mileage = 0;

    function __construct($name,$speed,$mileage){
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }
}

class Bus extends Vehicle {

}


?>