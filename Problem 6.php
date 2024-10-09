<?php
/* Create a Bus child class that inherits from the Vehicle class. The default fare 
charge of any vehicle is seating capacity * 100. If Vehicle is Bus instance, we 
need to add an extra 10% on full fare as a maintenance charge. So total fare for 
bus instance will become the final amount = total fare + 10% of the total fare. */

class Vehicle {
    public function fare($capacity){
        return $capacity * 100;
    }
}

class Bus extends Vehicle {
    public function fare($capacity){
        $totalFare = $capacity * 100;
        $maintenanceCharge = $totalFare * 0.10;
        return $totalFare + $maintenanceCharge;
    }
}

?>