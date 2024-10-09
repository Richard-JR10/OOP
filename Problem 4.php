<?php

//Create a Bus class that inherits from the Vehicle class in Problem #1. Give the capacity argument of Bus->seating_capacity() a default value of 50. 


class Bus extends Vehicle {
    public $capacity;

    public function seating_capacity($capacity = 50){
        $this->capacity = $capacity;

        return $this->capacity;  
    }
}



?>