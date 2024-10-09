<?php

//Create a Bus class that inherits from the Vehicle class in Problem #1. Give the capacity argument of Bus->seating_capacity() a default value of 50. 
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
    public $capacity;

    public function seating_capacity($capacity = 50){
        $this->capacity = $capacity;

        return $this->capacity;  
    }
}



?>