<?php 
//Using the Vehicle, Bus, and Car classes, define a property that must have the same value for every class instance (object). 
class Vehicle {
    public static $fuelType = "Diesel";
}

class Bus extends Vehicle {

}

class Car extends Vehicle {

}

?>
