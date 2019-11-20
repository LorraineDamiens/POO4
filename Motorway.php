<?php
require_once 'Highway.php';

final class Motorway extends Highway
{
    private $nbLane = 4;
    private $maxSpeed= 130;

    public function addvehicles(Vehicle $currentVehicles)
    {
        if ($currentVehicles instanceof Truck or $currentVehicles instanceof Car)
            $this->currentVehicles[] = $currentVehicles;
    }

}