<?php
//Write a PHP program to create a Vehicle class with name, speed and mileage instance attributes. 

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

?>